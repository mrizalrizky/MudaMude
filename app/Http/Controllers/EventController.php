<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $upcomingDate = (Carbon::now()->addDays(11));

        $events = Event::where('date', '<', $upcomingDate)->get();

        return view('pages.event', compact('events'));
    }

    public function showEventDetail($id) {
        $event = Event::find($id);

        return view('pages.eventdetail', compact('event'));
    }
}
