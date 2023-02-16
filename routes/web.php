<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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



/* Route::get('/listing/{id}', function ($id) {
    $listing =  Listing::find($id);
    if ($listing) {
        return view('listing', ['listing' => $listing]);
    } else {
        abort('404');
    }
})->name('listing'); */

// Route::get('/listing/{listing}', [ListingController::class, 'show'])->name('listing');

Route::get('/test', function () {
    return view('test');
})->name('test');
Route::get('/info', function () {
    return phpinfo();
});
// Common resource routes
// index - show all listings
// show - show one listing
// create - show form to create new listing
// store - store new listing
// edit - show form to edit listing
// update - update listing
// destrioy - delete listing

Route::get('/', [ListingController::class, 'index'])->name('listings');

/* to show create form */
Route::get('/listings/create', [ListingController::class, 'create'])->name('create')->middleware('auth');
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->name('edit')->middleware('auth');
Route::put('/listings/{listing}', [ListingController::class, 'update'])->name('update')->middleware('auth');
Route::post('/listings', [ListingController::class, 'store'])->name('store')->middleware('auth');
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->name('destroy')->middleware('auth');

Route::get('/listing/{listing}', [ListingController::class, 'show'])->name('listing');

/* register form */
Route::get('/register', [UserController::class, 'create'])->name('register')->middleware('guest');
Route::post('/users', [UserController::class, 'store'])->name('storeUser');
/* login form */
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->name('authenticate');

Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

/* manage listings */
Route::get('/listings/manage', [ListingController::class, 'manage'])->name('manage')->middleware('auth');
