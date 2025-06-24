<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/login', function () {
    return view('layouts.login');
})->name('login');

Route::get('/periodictable', function () {
    return view('layouts.periodic-table');
})->name('periodic-table');

Route::get('/renderonline', function () {
    return view('layouts.render-online');
})->name('render-online');