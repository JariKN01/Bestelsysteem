<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', function () {return view('home');})->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/bestelformulier', [App\Http\Controllers\BestelformulierController::class, 'create']);
Route::get('/databasebeheer', [App\Http\Controllers\DatabasebeheerController::class, 'index'])->name('databasebeheer');
Route::get('/gebruikersbeheer', [App\Http\Controllers\GebruikersbeheerController::class, 'index'])->name('gebruikersbeheer');
