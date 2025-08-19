<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('start');

Route::get('/leistungen', function () {
    return view('welcome');
})->name('leistungen');

Route::get('/projekte', function () {
    return view('welcome');
})->name('projekte');

Route::get('/impressum', function () {
    return view('welcome');
})->name('impressum');

Route::get('/datenschutz', function () {
    return view('welcome');
})->name('datenschutz');

Route::get('/kontakt', function () {
    return view('welcome');
})->name('kontakt');


