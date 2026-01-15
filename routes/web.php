<?php

use App\Http\Controllers\AdminController;
use App\Models\Booking;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('user.home');

Route::get('/admin', function () {
    $bookings = Booking::all();
    return view('pages.admin_home', compact('bookings'));
})->name('admin.home');

Route::get('/admin-create', function () {
    return view('pages.admin_create');
})->name('admin.create');

Route::get('/bookings/{booking}/edit', [AdminController::class, 'edit'])->name('bookings.edit');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('user.contact');

Route::get('/about', function () {
    return view('pages.about');
})->name('pages.about');
