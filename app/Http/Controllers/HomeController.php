<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function homeEvents(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $eventlatest = Event::latest()->first();

        $events = Event::where('status', 'upcoming')->latest()->paginate(4);
        return view('home', compact('events', 'eventlatest'));
    }

    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $events = Event::where('status', 'upcoming')->latest()->paginate(4);
        return view('home.events', compact('events'));
    }

    public function ticketShow(Event $event)
    {
        return view('home.ticketform', compact('event'));
    }

    public function store(Request $request, Event $event)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'ticket_quantity' => 'required|integer|min:1',
        ]);

        $user = Auth::user();

        // Ensure event exists and has enough tickets
        if (!$event || $event->tickets()->sum('quantity') < $validated['ticket_quantity']) {
            return redirect()->back()->withErrors(['ticket_quantity' => 'Not enough tickets available.']);
        }

        // Create booking
        Booking::create([
            'user_id' => $user->id,
            'event_id' => $event->id,
            'booking_date' => now(),
            'ticket_quantities' => $validated['ticket_quantity'],
            'total_price' => 0,
        ]);

        // Update ticket quantity
        $this->updateTicketQuantity($event->id, $validated['ticket_quantity']);

        return redirect()->back()->with('success', 'Booking successful!');
    }


//    private function calculateTotalPrice($eventId, $ticketQuantity)
//    {
//        $pricePerTicket = 0;
//        return $pricePerTicket * $ticketQuantity;
//    }

    private function updateTicketQuantity($eventId, $ticketQuantity)
    {
        // Implement logic to update ticket availability here
        // This is a simple example, you may need to adjust it based on your ticket model
        $tickets = Ticket::where('event_id', $eventId)->get();
        foreach ($tickets as $ticket) {
            if ($ticket->quantity >= $ticketQuantity) {
                $ticket->quantity -= $ticketQuantity;
                $ticket->save();
                break;
            } else {
                $ticketQuantity -= $ticket->quantity;
                $ticket->quantity = 0;
                $ticket->save();
            }
        }
    }
}
