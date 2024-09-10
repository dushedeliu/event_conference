<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index(){
        $user = Auth::user();
        $bookings = Booking::where('user_id', $user->id)->with('event')->get();
        return view('bookings.index', compact('bookings'));
    }

    public function destroy(Booking $booking)
    {
        // Delete the booking
        $booking->delete();
        $this->restoreTicketQuantity($booking->event_id, $booking->ticket_quantities);
        return redirect()->route('bookings.index')->with('success', 'Booking cancelled successfully.');
    }

    private function restoreTicketQuantity($eventId, $ticketQuantity)
    {
        // Retrieve all tickets related to the event
        $tickets = Ticket::where('event_id', $eventId)->get();

        foreach ($tickets as $ticket) {
            // Add the ticket quantity back to the available quantity
            $ticket->quantity += $ticketQuantity;
            $ticket->save();

            // Break the loop if the quantity to restore is fully handled
            $ticketQuantity -= $ticket->quantity;

            if ($ticketQuantity <= 0) {
                break;
            }
        }
    }

}
