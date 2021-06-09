<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// DEFAULT LARAVEL WELCOME PAGE
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'i18n'])->group(function () {
    // DEFAULT LARAVEL DASHBOARD PAGE
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // FRONTEND RESOURCE CONTROLLERS
    Route::resource('users', UserController::class);
    Route::resource('customers', CustomerController::class);
    Route::resource('cars', CarController::class);
    Route::resource('rentals', RentalController::class);
});

// DEFAULT LARAVEL AUTH ROUTES
require __DIR__ . '/auth.php';