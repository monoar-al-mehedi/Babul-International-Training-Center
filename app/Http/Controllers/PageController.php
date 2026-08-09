<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function about(): View
    {
        return view('pages.about');
    }

    public function directorProfile(): View
    {
        return view('pages.director-profile');
    }

    public function companyProfile(): View
    {
        return view('pages.company-profile');
    }

    public function gallery(): View
    {
        return view('pages.gallery');
    }

    public function branches(): View
    {
        return view('pages.branches');
    }

    public function services(): View
    {
        return view('pages.services');
    }

    public function contact(): View
    {
        return view('pages.contact');
    }

    public function storeContact(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['nullable', 'string', 'max:40'],
            'subject' => ['required', 'string', 'max:180'],
            'message' => ['required', 'string', 'max:3000'],
        ]);

        return back()->with('success', 'Thank you! Your message has been received. We will contact you soon.');
    }
}
