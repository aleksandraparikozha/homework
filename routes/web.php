<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("/films", [\App\http\Controllers\FilmController::class, 'index'] );

Route::get("/films/create", [\App\http\Controllers\FilmController::class, 'create'] )->name('films.create');

Route::get('/films/{id}', [\App\http\Controllers\FilmController::class, 'show']);

Route::post('/films/save_film', [\App\http\Controllers\FilmController::class, 'save'])->name('films.save');

Route::delete('/films/{id}/delete', [\App\http\Controllers\FilmController::class, 'delete'])->name('films.delete');

Route::get("/films/{id}/edit", [\App\http\Controllers\FilmController::class, 'edit'] )->name('films.edit');

Route::put('/films/{id}/update', [\App\http\Controllers\FilmController::class, 'update'])->name('films.update');
