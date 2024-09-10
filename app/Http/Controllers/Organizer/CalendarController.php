<?php

namespace App\Http\Controllers\Organizer;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index(Request $request)
    {
        return view('events.fullcalendar');
    }

    public function getEvents()
    {
        $events = auth()->user()->events()->get();
        $eventJson = array();
        foreach ($events as $event) {
            $eventJson[] = [
                'id' => $event->id,
                'title' => $event->title,
                'start' => $event->start_date->toIso8601String(),
                'end' => $event->end_date->toIso8601String(),
            ];
        }
        return response()->json($eventJson);
    }

    public function addEvent(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'start_date' => ['required', 'date', 'after:tomorrow'],
            'end_date' => ['required', 'date', 'after_or_equal:start_date'],
        ]);
        $event = Event::create([
            'title' => $request->title,
            'start_date' => Carbon::parse($request->start_date),
            'end_date' => Carbon::parse($request->end_date),
            'user_id' => auth()->id()
        ]);
        return response()->json($event);
    }


    public function updateEvent(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->update([
            'start_date' => Carbon::parse($request->input('start_date')),
            'end_date' => Carbon::parse($request->input('end_date')),
        ]);

        return response()->json(['message' => 'Event moved successfully']);
    }

    public function resizeEvent(Request $request, $id){
        $event = Event::findOrFail($id);
        $event->update([
            'end_date' => Carbon::parse($request->input('end_date')),
        ]);

        return response()->json(['message' => 'Event resized successfully']);
    }


    public function destroyEvents($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return response()->json(['message', 'Event has been deleted successfully']);
    }
}
