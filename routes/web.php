<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('login');
})->name('login');


//Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('modules.dashboard');
    })->name('dashboard');

    Route::get('/help', function(){
        return view('modules.forms.help');
    })->name('help');

Route::get('/board', function(){
    return view('modules.technician.index');
})->name('board');




//});
