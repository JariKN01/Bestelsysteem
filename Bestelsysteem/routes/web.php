<?php
Auth::routes();
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BestelformulierController;
use App\Http\Controllers\DatabasebeheerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AfdelingController;
use App\Http\Controllers\CategorieController;

Route::get('/', function () {return view('home');})->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/bestelformulier', [BestelformulierController::class, 'create']);
Route::get('/bestelformulier', function () {return view('bestelformulier');})->name('bestelformulier');
Route::post('/bestelformulier/opslaan', [BestelformulierController::class, 'store'])->name('bestelformulier/opslaan');

Route::get('/databasebeheer', [DatabasebeheerController::class, 'index'])->name('databasebeheer');
Route::post('/databasebeheer/upload', [DatabasebeheerController::class, 'upload'])->name('databasebeheer/upload');
Route::get('/gebruikersbeheer', [UserController::class, 'index'])->name('gebruikersbeheer');
Route::get('/gebruikersbeheer/create', [UserController::class, 'create'])->name('user.create');
Route::post('/gebruikersbeheer', [UserController::class, 'store'])->name('users.store');


Route::get('/databasebeheer/afdeling', function () {return view('afdeling');})->name('afdeling');
Route::get('/databasebeheer/categorie', function () {return view('categorie');})->name('categorie');
Route::get('/adres', function () {return view('adres');})->name('adres');

Route::put('/gebruikersbeheer/update', [UserController::class, 'update'])->name('users.update');
Route::delete('/gebruikersbeheer/{id}', [UserController::class, 'delete'])->name('users.delete');

//Route::get('/afdeling', [AfdelingController::class, 'index'])->name('afdeling');
//Route::get('/categorie', [CategorieController::class, 'index'])->name('categorie');
