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
    return view('index');
});

Route::resource('/blog',\App\Http\Controllers\PostsController::class);


Route::get('/blog', [\App\Http\Controllers\PostsController::class, 'index']);
Route::get('/blog/create', [\App\Http\Controllers\PostsController::class, 'create']);
Route::post('/blog', [\App\Http\Controllers\PostsController::class, 'store']);
Route::get('/blog/{slug}', [\App\Http\Controllers\PostsController::class, 'show']);
Route::get('/blog/{slug}/edit', [\App\Http\Controllers\PostsController::class, 'edit']);
Route::put('/blog/{id}', [\App\Http\Controllers\PostsController::class, 'update']);
Route::delete('/blog/{id}', [\App\Http\Controllers\PostsController::class, 'destroy']);





Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');


