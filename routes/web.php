<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing');
});

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/periodictable', function () {
    return view('pages.periodic-table');
})->name('periodic-table');

Route::get('/renderonline', function () {
    return view('pages.render-online');
})->name('render-online');