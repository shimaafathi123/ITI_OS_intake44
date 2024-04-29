<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
Route::get('/posts',[PostController::class,'index'])->name('posts.home');

Route::get("/posts/create",[PostController::class,'create'])->name('post.create');
Route::get("/posts/{id}", [PostController::class,'show'])->name('post.show');
Route::get("/posts/edit/{id}", [PostController::class,'edit'])->name('post.edit');
Route::delete("/posts/{id}", [PostController::class, 'destroy'])->name('post.destroy');
