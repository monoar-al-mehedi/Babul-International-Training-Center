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
        $circular = collect(config('circulars'))->firstWhere('slug', $slug);

        abort_if(! $circular, 404);

        return view('pages.circulars.show', ['circular' => $circular]);
    }
}
