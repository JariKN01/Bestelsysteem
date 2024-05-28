<?php
Auth::routes();
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BestelformulierController;
use App\Http\Controllers\DatabasebeheerController;
use App\Http\Controllers\GebruikersbeheerController;
use App\Http\Controllers\AfdelingController;

Route::get('/', function () {return view('home');})->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/bestelformulier', [BestelformulierController::class, 'create']);
Route::get('/home/bestelformulier', function () {return view('bestelformulier');})->name('bestelformulier');
Route::get('/databasebeheer', [DatabasebeheerController::class, 'index'])->name('databasebeheer');
Route::get('/gebruikersbeheer', [GebruikersbeheerController::class, 'index'])->name('gebruikersbeheer');
Route::get('/afdeling', [AfdelingController::class, 'index'])->name('afdeling');
Route::get('/databasebeheer/afdeling', function () {return view('afdeling');})->name('afdeling');
