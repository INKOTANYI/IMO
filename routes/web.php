<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('admin.dashboard');
    }
    return view('welcome');
})->name('home');

// Public Events
Route::get('/events', [\App\Http\Controllers\EventsController::class, 'publicIndex'])->name('public.events.index');
Route::get('/events/{id}', [\App\Http\Controllers\EventsController::class, 'publicShow'])->name('public.events.show');

Route::middleware('auth')->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Admin Social module
    Route::prefix('admin/social')->name('admin.social.')->group(function () {
        Route::get('accounts', [\App\Http\Controllers\Admin\SocialAccountsController::class, 'index'])->name('accounts.index');
        Route::post('accounts/disconnect/{account}', [\App\Http\Controllers\Admin\SocialAccountsController::class, 'disconnect'])->name('accounts.disconnect');

        // Meta (Facebook/Instagram) OAuth
        Route::get('accounts/connect/meta', [\App\Http\Controllers\Admin\MetaOAuthController::class, 'redirect'])->name('accounts.meta.redirect');
        Route::get('accounts/meta/callback', [\App\Http\Controllers\Admin\MetaOAuthController::class, 'callback'])->name('accounts.meta.callback');
        Route::post('accounts/meta/connect-page', [\App\Http\Controllers\Admin\MetaOAuthController::class, 'connectPage'])->name('accounts.meta.connect_page');

        Route::get('posts', [\App\Http\Controllers\Admin\SocialPostsController::class, 'index'])->name('posts.index');
        Route::get('composer', [\App\Http\Controllers\Admin\SocialPostsController::class, 'create'])->name('posts.create');
        Route::post('posts', [\App\Http\Controllers\Admin\SocialPostsController::class, 'store'])->name('posts.store');

        Route::get('media', [\App\Http\Controllers\Admin\MediaController::class, 'index'])->name('media.index');
        Route::post('media', [\App\Http\Controllers\Admin\MediaController::class, 'store'])->name('media.store');
    });

    // Admin Events CRUD
    Route::prefix('admin')->group(function () {
        Route::get('events', [\App\Http\Controllers\EventsController::class, 'adminIndex'])->name('events.index');
        Route::get('events/data', [\App\Http\Controllers\EventsController::class, 'data'])->name('events.data');
        Route::get('events/create', [\App\Http\Controllers\EventsController::class, 'create'])->name('events.create');
        Route::post('events', [\App\Http\Controllers\EventsController::class, 'store'])->name('events.store');
        Route::get('events/{id}/edit', [\App\Http\Controllers\EventsController::class, 'edit'])->name('events.edit');
        Route::put('events/{id}', [\App\Http\Controllers\EventsController::class, 'update'])->name('events.update');
        Route::delete('events/{id}', [\App\Http\Controllers\EventsController::class, 'destroy'])->name('events.destroy');
        Route::get('events/{id}', [\App\Http\Controllers\EventsController::class, 'show'])->name('events.show');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/photos', [PhotoController::class, 'index'])->name('photos.index');
});

require __DIR__ . '/auth.php';

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

Route::get('/our-partners', function () {
    return view('our-partners');
})->name('our-partners');

Route::get('/events', function () {
    return view('events');
})->name('events.index');

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

// Newsletter subscribe
Route::post('/newsletter/subscribe', [NewsletterController::class, 'store'])->name('newsletter.subscribe');