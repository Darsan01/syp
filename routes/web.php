<?php

use App\Http\Middleware\Authenticate;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\propertiesController;
use App\Http\Controllers\leasesController;
use App\Http\Controllers\locationsController;
use App\Http\Controllers\emailsController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
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

// Route::view('/', 'login1');
Route::view('/', 'auth.login1')->name('login1');
Route::view('/register1', 'auth.register1')->name('register1');

Auth::routes();

// Admin Routes
Route::get('/admin', [adminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin', [App\Http\Controllers\adminController::class, 'index'])->name('Dashboard')->middleware('auth');
Route::get('/locations', [locationsController::class, 'index'])->name('locations.index');
Route::post('/locations/store', [App\Http\Controllers\locationsController::class, 'store']);


Route::get('/properti', [PropertyController::class, 'index'])->name('properties.index');
Route::get('/about', [AboutUsController::class, 'index']);
Route::get('/contact', [ContactUsController::class, 'index']);
Route::get('/properties', [PropertyController::class, 'index']);


Route::middleware([Authenticate::class])->group(function () {

    // Properties
    Route::prefix('properties')->group(function () {
        Route::get('/properties', [propertiesController::class, 'index'])->name('properties.index');
        Route::get('/', [App\Http\Controllers\propertiesController::class, 'index'])->name('properties');
        Route::get('/create', [App\Http\Controllers\propertiesController::class, 'create']);
        Route::post('/store', [App\Http\Controllers\propertiesController::class, 'store'])->name('create.property');
        Route::get('/delete/{pid}', [App\Http\Controllers\propertiesController::class, 'destroy']);
        Route::get('/edit/{pid}', [App\Http\Controllers\propertiesController::class, 'edit']);
        Route::post('/update/{pid}', [App\Http\Controllers\propertiesController::class, 'update'])->name('update.property');
    });

    // Leases
    Route::prefix('leases')->group(function () {
        Route::get('/leases', [leasesController::class, 'index'])->name('leases.index');
        Route::get('/', [App\Http\Controllers\leasesController::class, 'index'])->name('leases');
        Route::get('/create', [App\Http\Controllers\leasesController::class, 'create']);
        Route::post('/store', [App\Http\Controllers\leasesController::class, 'store'])->name('create.lease');
        Route::get('/delete/{pid}', [App\Http\Controllers\leasesController::class, 'destroy']);
        Route::get('/edit/{pid}', [App\Http\Controllers\leasesController::class, 'edit'])->name('Edit Lease');
        Route::post('/update/{pid}', [App\Http\Controllers\leasesController::class, 'update'])->name('update.lease');
    });

    // Employess
    Route::prefix('employees')->group(function () {

        Route::get('/', [App\Http\Controllers\employeesController::class, 'index'])->name('employees');
        Route::get('/create', [App\Http\Controllers\employeesController::class, 'create'])->name('Create Employee');
        Route::post('/store', [App\Http\Controllers\employeesController::class, 'store'])->name('create.employee');
        Route::get('/delete/{pid}', [App\Http\Controllers\employeesController::class, 'destroy']);
        Route::get('/edit/{pid}', [App\Http\Controllers\employeesController::class, 'edit']);
        Route::post('/update/{pid}', [App\Http\Controllers\employeesController::class, 'update'])->name('update.employee');
    });

    // Email
    Route::prefix('emails')->group(function () {
        Route::get('/compose', [emailsController::class, 'compose'])->name('compose');
        Route::get('/inbox', [emailsController::class, 'inbox'])->name('inbox');
        Route::get('/send-mail', [emailsController::class, 'sendMail']);
    });
});

Route::group([], function () {
    //Route::get('/login', [AuthController::class, 'showLoginForm'])->name('loggin');
    //Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    Route::get('/auth/facebook', [AuthController::class, 'redirectToFacebook'])->name('auth.facebook');
    Route::get('/auth/facebook/callback', [AuthController::class, 'handleFacebookCallback']);
    Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('auth.google');
    Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('auth/facebook', 'Auth\LoginController@redirectToFacebook')->name('auth.facebook');
Route::get('auth/facebook/callback', 'Auth\LoginController@handleFacebookCallback');
Route::get('auth/google', 'Auth\LoginController@redirectToGoogle')->name('auth.google');
Route::get('auth/google/callback', 'Auth\LoginController@handleGoogleCallback');

Route::get('/about', function () {
    return view('about.about');
});

Route::get('/contact', function () {
    return view('contact.contact');
});

Route::get('/property', function () {
    return view('property.property');
});
