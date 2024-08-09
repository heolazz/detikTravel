<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/registrasi', function () {
    return view('registrasi');
})->name('registrasi');
