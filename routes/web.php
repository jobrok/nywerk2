<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('start');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/use-cases', function () {
    return view('use-cases');
})->name('use-cases');

Route::get('/impressum', function () {
    return view('impressum');
})->name('impressum');

Route::get('/datenschutz', function () {
    return view('datenschutz');
})->name('datenschutz');
