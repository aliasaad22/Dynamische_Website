<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactController;
Use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\PlayerController as AdminPlayerController;
//Route::view('/home', 'welcome')->name('home');


Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{id}', [NewsController::class, 'show']);
Route::get('/news/{id}', [NewsController::class, 'show']);
Route::get('/teams', [TeamController::class, 'index']);
Route::get('/teams/{id}', [TeamController::class, 'show']);
Route::get('/players', [PlayerController::class, 'index']);
Route::get('/faq', [FaqController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'send']);
Route::get('/profile/{id}', [ProfileController::class, 'show']);
Route::get('/profile', [ProfileController::class, 'edit'])->middleware('auth');
Route::post('/profile', [ProfileController::class, 'update'])->middleware('auth');
Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');
Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
Route::get('/teams/{id}', [TeamController::class, 'show'])->name('teams.show');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/players', [PlayerController::class, 'index'])->name('players.index');
Route::get('/players/{id}', [PlayerController::class, 'show'])->name('players.show');




Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('players', AdminPlayerController::class);
});

require __DIR__.'/settings.php';
