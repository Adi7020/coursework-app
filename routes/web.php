<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/{post}',[PostController::class,'index'])->name('post.index');

Route::get('/comments/{id}', [CommentController::class,'index'])->name('comment.index');

Route::get('/users/{id}',[UserController::class,'index'])->name('user.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/posts',[PostController::class,'store'])->name('post.store');

Route::match(['get', 'post'], '/comments/{id}', [CommentController::class, 'index'])->name('comment.index');

Route::get('/posts/{id}/edit',[PostController::class,'edit'])->name('posts.edit');

Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');

Route::get('/comments/{comment}/edit',[CommentController::class,'edit'])->name('comments.edit');


Route::post('/comments',[CommentController::class,'store'])->name('comments.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
