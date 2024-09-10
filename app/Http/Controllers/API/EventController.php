<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $events = Event::all();
        return response()->json($events);
    }

    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:3000'],
            'start_date' => ['required', 'date', 'after:tomorrow'],
            'end_date' => ['required', 'date', 'after_or_equal:start_date'],
        ]);
        $startDate = \Carbon\Carbon::parse($request->input('start_date'));
        $endDate = \Carbon\Carbon::parse($request->input('end_date'));

        if ($startDate->hour <= 8) {
            return response()->json(['error' => 'Start date must be after 8 hours.'], 422);
        }

        if($endDate->hour > 23){
            return response()->json(['error' => 'End date must be after 23 hours.'], 422);
        }

        $event= Event::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'start_date' => $data['start_date'],
            'end_date' => $data['end_date'],
        ]);

        return response()->json(['message' => 'Event created successfully.'], 200);
    }

    public function update(Request $request, Event $event): \Illuminate\Http\JsonResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:3000'],
            'start_date' => ['required', 'date', 'after:tomorrow'],
            'end_date' => ['required', 'date', 'after_or_equal:start_date'],
        ]);
        $startDate = \Carbon\Carbon::parse($request->input('start_date'));
        $endDate = \Carbon\Carbon::parse($request->input('end_date'));

        if ($startDate->hour <= 8) {
            return response()->json(['error' => 'Start date must be after 8 hours.'], 422);
        }

        if($endDate->hour > 23){
            return response()->json(['error' => 'End date must be after 23 hours.'], 422);
        }
        $event->update($data);
        return response()->json(['message' => 'Event updated successfully.'], 200);
    }

    public function destroy(Event $event): \Illuminate\Http\JsonResponse
    {
        $event->delete();
        return response()->json(['message' => 'Event deleted successfully.'], 200);
    }
}
