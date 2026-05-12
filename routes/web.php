<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\PlayerController as AdminPlayerController;



// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// News
Route::controller(NewsController::class)->prefix('news')->name('news.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{id}', 'show')->name('show');
});

// Teams

Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');

// Players
Route::controller(PlayerController::class)->prefix('players')->name('players.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{id}', 'show')->name('show');
});

// FAQ
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

// Contact
Route::controller(ContactController::class)->prefix('contact')->name('contact.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'send')->name('send');
});

// Profile (authenticated user)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

// Public profile
Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');

// Admin
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

    // Admin Player Management
    Route::resource('players', AdminPlayerController::class);
});

// Additional settings routes
require __DIR__ . '/settings.php';