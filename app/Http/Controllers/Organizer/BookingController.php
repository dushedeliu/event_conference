<?php

namespace App\Http\Controllers\Organizer;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function show(Event $event){
        $bookings = $event->bookings()->get();
        return view('events.bookings.show', compact('bookings', 'event'));
    }
}
