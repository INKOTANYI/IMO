<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin/events', [EventsController::class, 'adminIndex'])->name('events.index');
    Route::get('/events/data', [EventsController::class, 'data'])->name('events.data');
    Route::get('/events/create', [EventsController::class, 'create'])->name('events.create');
    Route::post('/events', [EventsController::class, 'store'])->name('events.store');
    Route::get('/events/{id}/edit', [EventsController::class, 'edit'])->name('events.edit');
    Route::put('/events/{id}', [EventsController::class, 'update'])->name('events.update');
    Route::delete('/events/{id}', [EventsController::class, 'destroy'])->name('events.destroy');

    Route::get('/photos', [PhotoController::class, 'index'])->name('photos.index');
});

require __DIR__ . '/auth.php';

Route::get('/events', [EventsController::class, 'publicIndex'])->name('public.events.index');
Route::get('/events/{id}', [EventsController::class, 'show'])->name('events.show');

Route::get('/who-we-are', function () {
    return view('who-we-are');
})->name('who-we-are');

Route::get('/our-founders', function () {
    return view('our-founders');
})->name('our-founders');

Route::get('/our-board', function () {
    return view('our-board');
})->name('our-board');

Route::get('/our-staff', function () {
    return view('our-staff');
})->name('our-staff');

Route::get('/our-values', function () {
    return view('our-values');
})->name('our-values');

Route::get('/our-history', function () {
    return view('our-history');
})->name('our-history');

Route::get('/mission-vision', function () {
    return view('mission-vision');
})->name('mission-vision');

Route::get('/inclusive-education', function () {
    return view('inclusive-education');
})->name('inclusive-education');

Route::get('/health-care', function () {
    return view('health-care');
})->name('health-care');

Route::get('/capacity-building', function () {
    return view('capacity-building');
})->name('capacity-building');

Route::get('/research-advocacy', function () {
    return view('Research');
})->name('research-advocacy');

Route::get('/family-resilience', function () {
    return view('FamilyResilience');
})->name('family-resilience');

Route::get('/community-engagement', function () {
    return view('community-engagement');
})->name('community-engagement');

Route::get('/news-updates', function () {
    return view('news-updates');
})->name('news-updates');

Route::get('/publications', function () {
    return view('publications');
})->name('publications');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/careers', function () {
    return view('careers');
})->name('careers');

Route::get('/tenders', function () {
    return view('tenders');
})->name('tenders');

Route::get('/contact-us', function () {
    return view('welcome', ['section' => 'contact']);
})->name('contact-us');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/donate', function () {
    return view('donate');
})->name('donate');

Route::get('/volunteer', function () {
    return view('volunteer');
})->name('volunteer');

Route::get('/volunteer-form', function () {
    return view('volunteer-form');
})->name('volunteer-form');