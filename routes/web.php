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
})->name('home');

Route::get('/login', [\App\http\Controllers\LoginController::class, 'login'])->name('login');

Route::post('/films/post_login', [\App\http\Controllers\LoginController::class, 'postLogin'])->name('post.login');

Route::get("/users/create", [\App\http\Controllers\LoginController::class, 'user_create'] )->name('user_create');

Route::post('/users/save_user', [\App\http\Controllers\LoginController::class, 'save_user'])->name('user.save');



Route::middleware('auth')->group(function (){

Route::get("/my_films", [\App\http\Controllers\FilmController::class, 'user_films'] )->name('my_films');

Route::get("/films", [\App\http\Controllers\FilmController::class, 'index'] )->name('films');

Route::get("/films/create", [\App\http\Controllers\FilmController::class, 'create'] )->name('films.create');

Route::get('/films/{film}', [\App\http\Controllers\FilmController::class, 'show'])->name('films.show');

Route::post('/films/save_film', [\App\http\Controllers\FilmController::class, 'save'])->name('films.save');

Route::delete('/films/{film}/delete', [\App\http\Controllers\FilmController::class, 'delete'])->name('films.delete');

Route::get("/films/{film}/edit", [\App\http\Controllers\FilmController::class, 'edit'] )->name('films.edit');

Route::put('/films/{film}/update', [\App\http\Controllers\FilmController::class, 'update'])->name('films.update');


Route::post('/films/logout', [\App\http\Controllers\LoginController::class, 'logout'])->name('logout');


});
