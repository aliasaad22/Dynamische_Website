<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\PlayerController as AdminPlayerController;
use App\Http\Controllers\Admin\FaqCategoryController;
use App\Http\Controllers\Admin\FaqItemController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Admin\AdminUserController;

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
Route::get('/players', [PlayerController::class, 'index'])->name('players.index');

// FAQ
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

// Contact
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');




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


    Route::resource('players', AdminPlayerController::class);
});


Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('faq/categories', FaqCategoryController::class);
    Route::resource('faq/items', FaqItemController::class);
});



// Registration routes
Route::view('/register', 'auth.register')
    ->middleware('guest')
    ->name('register');

Route::post('/register', Register::class)
    ->middleware('guest');




// Login routes
Route::view('/login', 'auth.login')
    ->middleware('guest')
    ->name('login');

Route::post('/login', Login::class)
    ->middleware('guest');

// Logout route
Route::post('/logout', Logout::class)
    ->middleware('auth')
    ->name('logout');





Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::resource('users', AdminUserController::class);
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::resource('users', AdminUserController::class);
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('users', \App\Http\Controllers\Admin\AdminUserController::class);
});

    
require __DIR__ . '/settings.php';