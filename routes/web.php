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
    // USERS SECTION
    Route::get('/users', App\Http\Livewire\User\Index::class)->name('users.index');
    Route::get('/users/create', App\Http\Livewire\User\Create::class)->name('users.create');

    // CUSTOMERS SECTION
    Route::get('/customers', App\Http\Livewire\Customer\Index::class)->name('customers.index');
    Route::get('/customers/create', App\Http\Livewire\Customer\Create::class)->name('customers.create');
    Route::get('/customers/{id}', App\Http\Livewire\Customer\Show::class)->name('customers.show');

    // CARS SECTION
    Route::get('/cars', App\Http\Livewire\Car\Index::class)->name('cars.index');
    Route::get('/cars/create', App\Http\Livewire\Car\Create::class)->name('cars.create');

    // RENTALS SECTION
    Route::get('/rentals', App\Http\Livewire\Rental\Index::class)->name('rentals.index');
    Route::get('/rentals/create', App\Http\Livewire\Rental\Create::class)->name('rentals.create');
});

// DEFAULT LARAVEL AUTH ROUTES
require __DIR__ . '/auth.php';