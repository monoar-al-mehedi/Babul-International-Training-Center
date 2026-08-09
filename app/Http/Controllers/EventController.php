<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class EventController extends Controller
{
    public function index(): View
    {
        return view('pages.events.index');
    }

    public function show(string $slug): View
    {
        $event = collect(config('events'))->firstWhere('slug', $slug);

        abort_if(! $event, 404);

        return view('pages.events.show', ['event' => $event]);
    }
}
