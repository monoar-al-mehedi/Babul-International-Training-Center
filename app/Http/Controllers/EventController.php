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
        return view('pages.events.show', compact('slug'));
    }
}
