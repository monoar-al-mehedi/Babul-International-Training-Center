<?php

use App\Http\Controllers\CircularController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/director-profile', [PageController::class, 'directorProfile'])->name('director.profile');
Route::get('/company-profile', [PageController::class, 'companyProfile'])->name('company.profile');
Route::get('/galleries', [PageController::class, 'gallery'])->name('gallery');
Route::get('/branches', [PageController::class, 'branches'])->name('branches');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');
Route::post('/contact-us', [PageController::class, 'storeContact'])->name('contact.store');

Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/{slug}', [EventController::class, 'show'])->name('events.show');

Route::get('/circulars', [CircularController::class, 'index'])->name('circulars.index');
Route::get('/circulars/{slug}', [CircularController::class, 'show'])->name('circulars.show');
