<?php

namespace App\Http\Controllers\Organizer;


use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

/**
 * @method save()
 */
class EventController extends Controller
{
    public function index(){
        $events = auth()->user()->events()->latest()->get();

        $search = request()->input('search');
        if(request()->has('search')){
            $events = Event::where('title',  'like', "%$search%")->get();
        }
        return view('events.index',compact('events', 'search'));
    }

    public function create(){
        return view('events.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:3000'],
             'start_date' => ['required', 'date', 'after:tomorrow'],
            'end_date' => ['required', 'date', 'after_or_equal:start_date'],
            'location' => ['required', 'string', 'max:3000'],
            'quantity' => ['required', 'integer', 'min:1'],
        ]);
        $startDate = \Carbon\Carbon::parse($request->input('start_date'));
        $endDate = \Carbon\Carbon::parse($request->input('end_date'));

        if ($startDate->hour < 7) {
            return back()->withErrors(['start_date' => 'The start time must be after 08:00 AM.']);
        }

        if($endDate->hour > 23){
            return back()->withErrors(['end_date' => 'The end time must be before 11:00 PM.']);
        }

       $event= Event::create([
            'title' => $data['title'],
            'description' => $data['description'],
           'status' => 'upcoming',
            'start_date' => $data['start_date'],
            'end_date' => $data['end_date'],
           'location' => $data['location'],
           'user_id' => auth()->id(),
        ]);

        Ticket::create([
            'event_id' => $event->id,
            'quantity' => $data['quantity'],
        ]);


        $event->updateStatus();
        return redirect()->route('events.index')->with('success', 'Event stored successfully');
    }

    public function edit(Event $event): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        Session::put("event_{$event->id}_original_start_date", $event->start_date);
        Session::put("event_{$event->id}_original_end_date", $event->end_date);

        $ticket = $event->tickets()->first();
        return view('events.edit',compact('event', 'ticket'));
    }



    public function update(Request $request, Event $event): \Illuminate\Http\RedirectResponse
    {
        if ($event->status === 'pending') {
            return back()->withErrors(['error' => 'This event is currently pending approval and cannot be edited.']);
        }

        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:3000'],
            'start_date' => ['required', 'date', 'after:tomorrow'],
            'end_date' => ['required', 'date', 'after_or_equal:start_date'],
            'location' => ['nullable', 'string', 'max:3000'],
            'quantity' => ['required', 'integer', 'min:1'],
        ]);
        $startDate = \Carbon\Carbon::parse($request->input('start_date'));
        $endDate = \Carbon\Carbon::parse($request->input('end_date'));

        if ($startDate->hour <= 8) {
            return back()->withErrors(['start_date' => 'The start time must be after 08:00 AM.']);
        }

        if ($endDate->hour > 23) {
            return back()->withErrors(['end_date' => 'The end time must be before 11:00 PM.']);
        }

        $needsApproval = $event->needsApprovalForUpdate($data);

        if ($needsApproval) {
            // Store original dates in session
            Session::put("event_{$event->id}_original_start_date", $event->start_date);
            Session::put("event_{$event->id}_original_end_date", $event->end_date);

            // Store new data as pending
            $event->update([
                'title' => $data['title'],
                'description' => $data['description'],
                'pending_start_date' => $data['start_date'],
                'pending_end_date' => $data['end_date'],
                'location' => $data['location'],
                'status' => 'pending', // Needs approval
                'approved' => false, // Default to false until approved
            ]);
        } else {
            // Directly update the event
            $event->update([
                'title' => $data['title'],
                'description' => $data['description'],
                'start_date' => $data['start_date'],
                'end_date' => $data['end_date'],
                'location' => $data['location'],
                'status' => 'upcoming',
                'approved' => true,
            ]);

            $event->updateStatus();
        }

        $ticket = (new \App\Models\Ticket)->update([
            'quantity' => $data['quantity']
        ]);

        return redirect()->route('events.index', compact('ticket'))->with('success', $needsApproval ? 'Event update submitted for approval.' : 'Event updated successfully.');
    }


    public function destroy(Event $event): \Illuminate\Http\RedirectResponse
    {
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Deleted successfully');
    }



}
