<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

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

// Home Route
Route::get('/', function () {
    return view('home');
})->name('home');

// Services Route
Route::get('/services', function () {
    return view('services'); // Route for Services section
})->name('services');

// About Us Route
Route::get('/about', function () {
    return view('about'); // Route for About Us section
})->name('about');

// Contact Us Routes
Route::get('/contact', function () {
    return view('contact'); // Route for Contact Us section
})->name('contact');

// Store Contact Us form data
Route::post('/contact-us', [ContactUsController::class, 'store'])->name('contactus.store');

// User Registration Route
Route::post('/users', [UserController::class, 'store'])->name('users.store');

// **Login Routes**
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login'); // Uncommented this line
Route::post('login', [LoginController::class, 'login'])->name('login.submit');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');









