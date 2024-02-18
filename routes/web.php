<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth', 'verified'])->group(function () {

    // landing page when a new user login
    Route::get('/landing', function () {
        return view('landing');
    })->name('landing');

    // payment page for users, after selecting package
    Route::get('/payment', function () {
        return view('payment');
    })->name('payment');


    // user dashboard, after uploading all their info
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // contact info upload form,
    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    // contact info upload route to controller store function to store all data
    Route::post('/contact', [ContactController::class, 'store']);

    // bank info upload form,
    Route::get('/bank', function () {
        return view('bank');
    })->name('bank');

    // bank info upload route to controller store function to store all data
    Route::post('/bank', [BankController::class, 'store']);

    // card info upload form
    Route::get('/card', function () {
        return view('card');
    })->name('card');

    // card info upload route to controller store function to store all data
    Route::post('/card', [CardController::class, 'store']);


    // passport info upload form,
    Route::get('/passport', function () {
        return view('passport');
    })->name('passport');


    // nid info upload form
    Route::get('/nid', function () {
        return view('nid');
    })->name('nid');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
