<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\ContactController;
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

    Route::get('/landing', function () {
        return view('landing');
    })->name('landing');

    Route::get('/payment', function () {
        return view('payment');
    })->name('payment');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    Route::post('/contact', [ContactController::class, 'store']);

    Route::get('/bank', function () {
        return view('bank');
    })->name('bank');

    Route::post('/bank', [BankController::class, 'store']);

    Route::get('/card', function () {
        return view('card');
    })->name('card');

    Route::post('/card', [CardController::class, 'store']);

    Route::get('/passport', function () {
        return view('passport');
    })->name('passport');

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
