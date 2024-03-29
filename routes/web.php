<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\NIDController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PassportController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('auth.login');
});

/* Admin Routes */

// admin login routes
Route::prefix('admin')->group(function () {
    Route::get('login', [AdminController::class, 'index'])
        ->name('admin.login');
    Route::post('login', [AdminController::class, 'login']);
}); //

Route::middleware(['admin'])
    ->prefix('admin')
    ->group(function () {

        // logout admin
        Route::post('logout', [AdminController::class, 'logout'])
            ->name('admin.logout');

        // admin dashboard basically show all the users
        Route::get('/dashboard', [AdminController::class, 'dashboard'])
            ->name('admin.dashboard');

        // User role change 
         Route::get('/role_change',[AdminController::class, 'change_role_index'])
        ->name('role_change');

        // User role change 
         Route::post('/role_change',[AdminController::class, 'change_role']);

        // resource methods for creating packages
        Route::resource('package', PackageController::class)
            ->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);

        //resource method for creating roles
        Route::resource('roles', RoleController::class)
            ->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
    });
/* Admin Routes */




// user routes
Route::middleware(['auth', 'verified'])->group(function () {

    // landing page when a new user login
    Route::get('/landing', [LandingPageController::class, 'index'])
        ->name('landing');

    // payment page for users, after selecting package
    Route::post('/payment', [LandingPageController::class, 'next_page'])
        ->name('payment');

    // user dashboard, after uploading all their info
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // contact info upload form,
    Route::get('/contact', [ContactController::class, 'create'])->name('contact');

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
    Route::get('/passport', [PassportController::class, 'create'])
        ->name('passport');

    Route::post('/passport', [PassportController::class, 'store']);


    // nid info upload form
    Route::get('/nid', [NIDController::class, 'create'])->name('nid');
    Route::post('/nid', [NIDController::class, 'store']);


    // download passport pdf
    Route::get('/generate-passport-pdf', [DownloadController::class, 'passport'])
        ->name('download_passport');

    //download nid pdf
    Route::get('/generate-pdf', [DownloadController::class, 'nid'])
        ->name('download_nid');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
