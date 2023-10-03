<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComicController;
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

// HOMECONTROLLER ROUTES

Route::get('/', [HomeController::class, 'index'])->name('index');

// COMICCONTROLLER ROUTES

// CREATE

Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

// READ

Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

// UPDATE

Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');
Route::patch('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');

// DELETE
