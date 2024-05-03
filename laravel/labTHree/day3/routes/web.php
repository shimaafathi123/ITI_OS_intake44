<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;

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
//     5- destroy --> ask me are you want to delete post
//  to construct these routes

// delete: /posts/id ===> delete page

Route::get('/', function () {
    return view('welcome');
});



Route::get("/posts",[PostController::class,'index'] )->name('post.index');

Route::post("/posts",[PostController::class,'store'] )->name('post.store');

Route::get("/posts/create",[PostController::class,'create'] )->name('post.create');

Route::put('/posts/restore', [PostController::class,'restore'])->name('post.restore');

Route::get("/posts/{slug}", [PostController::class,'show'] )->name('post.show')->where('slug', '[a-zA-Z0-9-]+');


Route::delete("/posts/{slug}/destroy",[PostController::class,'destroy'] )->name('post.destroy')->where('id', '[0-9]+');

Route::get('/posts/edit/{slug}', [PostController::class, 'edit'])->name('post.edit')->where('slug', '[a-zA-Z0-9-]+');

Route::put('/posts/{slug}', [PostController::class, 'update'])->name('post.update');

Route::post('/comments', [CommentController::class, 'store'])->name('comment.store');
