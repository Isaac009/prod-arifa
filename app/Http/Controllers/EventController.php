<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $events = Event::query();

        if ($request->has('from') && $request->from != '') {
            $events->where('from', '>=', $request->from);
        }

        if ($request->has('to') && $request->to != '') {
            $events->where('to', '<=', $request->to);
        }

        $events = $events->paginate(10);
        return view('frontend/events.index', compact('events'));
    }
}
