<?php

use App\Http\Controllers\guests\Comicscontroller;
use App\Http\Controllers\guests\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", [PageController::class,"index"])->name("home");

Route::resource("/comics", Comicscontroller::class);

// Route::get("/{id}", [Comicscontroller::class,"show"])->name("show");

// Route::resources('/', ComicController::class);