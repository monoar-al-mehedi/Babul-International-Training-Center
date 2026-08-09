<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CircularController extends Controller
{
    public function index(): View
    {
        return view('pages.circulars.index');
    }

    public function show(string $slug): View
    {
        return view('pages.circulars.show', compact('slug'));
    }
}
