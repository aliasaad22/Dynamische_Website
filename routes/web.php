<?php

use Illuminate\Support\Facades\Route;

// Public Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;

// Auth Controllers
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;

// Admin Controllers
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\PlayerController as AdminPlayerController;
use App\Http\Controllers\Admin\FaqCategoryController;
use App\Http\Controllers\Admin\FaqItemController;
use App\Http\Controllers\Admin\AdminUserController;

use App\Http\Controllers\Auth\ForgotPasswordController;

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');



// Teams
Route::prefix('teams')->name('teams.')->controller(TeamController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

// Players
Route::prefix('players')->name('players.')->controller(PlayerController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

// FAQ
Route::prefix('faq')->name('faq.')->controller(FaqController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

// Contact
Route::prefix('contact')->name('contact.')->controller(ContactController::class)->group(function () {
    Route::get('/', 'create')->name('create');
    Route::post('/', 'submit')->name('submit');
});

// Public Profiles
Route::prefix('profile')->name('profile.')->controller(ProfileController::class)->group(function () {
    Route::get('/{user}', 'show')->name('show');
});


/*
|--------------------------------------------------------------------------
| AUTH ROUTES (Guest only)
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {

    // Register
    Route::view('/register', 'auth.register')->name('register');
    Route::post('/register', Register::class);

    // Login
    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', Login::class);

});


/*
|--------------------------------------------------------------------------
| AUTHENTICATED USER ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // Logout
    Route::post('/logout', Logout::class)->name('logout');

    // Own profile
    Route::prefix('profile')->name('profile.')->controller(ProfileController::class)->group(function () {
        Route::get('/', 'edit')->name('edit');
        Route::put('/', 'update')->name('update');
    });

});


/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        // Dashboard
        Route::get('/', [AdminController::class, 'index'])->name('dashboard');
        // Users Management
        Route::resource('users', AdminUserController::class);

        // FAQ Categories Management
        Route::resource('faq-categories', FaqCategoryController::class);

        // FAQ Items Management
        Route::resource('faq-items', FaqItemController::class);

    });

    

    Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])
        ->name('password.request');

    Route::post('/forgot-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])
        ->name('forget.password.post');

    Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])
        ->name('reset.password.get');

    Route::post('/reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])
        ->name('reset.password.post');
require __DIR__ . '/settings.php';