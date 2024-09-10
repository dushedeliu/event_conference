<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index(){
        $events = Event::where('status', 'upcoming')->latest()->get();

        return view('admin.events.index', compact('events'));
    }

    public function review()
    {
        // Fetch events that are pending approval
        $events = Event::where('approved', false)->latest()->get();
        return view('admin.events.updated', compact('events'));
    }

    public function approve(Event $event)
    {
        if (!$event->pending_start_date || !$event->pending_end_date) {
            return redirect()->route('admin.events.index')->withErrors(['error' => 'Cannot approve event: pending dates are not available.']);
        }

        // Apply pending dates
        $event->update([
            'start_date' => $event->pending_start_date,
            'end_date' => $event->pending_end_date,
            'status' => 'upcoming',
            'approved' => true,
            'pending_start_date' => null,
            'pending_end_date' => null,
        ]);

        $event->updateStatus();

        return redirect()->route('admin.events.index')->with('success', 'Event approved successfully.');
    }


    public function reject(Event $event)
    {
        // Check if pending dates are available
        if (!$event->pending_start_date || !$event->pending_end_date) {
            return redirect()->route('admin.events.index')->withErrors(['error' => 'Cannot reject event: pending dates are not available.']);
        }

        // Revert the pending dates to null
        $event->update([
            'status' => 'upcoming',
            'approved' => false,
            'pending_start_date' => null,
            'pending_end_date' => null,
        ]);

        return redirect()->route('admin.events.index')->with('success', 'Event rejected and pending dates cleared.');
    }

}
