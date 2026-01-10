<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('user.home');

Route::get('/admin', function () {
    return view('pages.admin_home');
})->name('admin.home');

Route::get('/admin-create', function () {
    return view('pages.admin_create');
})->name('admin.create');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('user.contact');

