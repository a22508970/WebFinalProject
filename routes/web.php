<?php

use App\Models\Booking;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientController;

Route::get('/', function () { return view('homepage');})->name('client.home');
Route::get('/booking', [ClientController::class, 'booking'])->name('client.booking_form');
Route::get('/gallery', [ClientController::class, 'gallery'])->name('client.gallery');
Route::get('/contact', [ClientController::class, 'contact'])->name('contact.form');
// Contact form
Route::post('/contact', [ClientController::class, 'storeContact'])->name('contact.store');
Route::get('/contact',[ClientController::class, 'contact'])->name('client.contact');

// Booking (frontend)
Route::post('/booking', [ClientController::class, 'storeBooking'])->name('client.booking_store');
Route::get('/about', function () {
    return view('pages.about');
})->name('client.about');


// AdminPages
Route::get('/admin',[AdminController::class, 'index'] )->name('admin.home')->middleware('auth');
Route::get('/bookings',[AdminController::class, 'allBookings'] )->name('admin.booking_list')->middleware('auth');;
Route::get('/bookings/{booking}/edit', [AdminController::class, 'edit'])->name('admin.booking_edit')->middleware('auth');;
Route::put('/bookings/{booking}', [AdminController::class, 'update'])->name('admin.booking_update')->middleware('auth');;
Route::delete('/bookings/{booking}', [AdminController::class, 'destroy'])->name('admin.destroy')->middleware('auth');;
Route::get('/contacts',[AdminController::class, 'allContacts'] )->name('admin.contact_list')->middleware('auth');;


//login pages
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');;
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');;
