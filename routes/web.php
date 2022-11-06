<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\HomeContoller;
use App\Http\Controllers\PerfilContoller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

// routing tipo clouser -- no recomendado
Route::get('/', function () {
    return view('principal');
});
*/

Route::get('/',HomeContoller::class)->name('home');


Route::get('/register', [ RegisterController::class, 'index'])->name('register');
Route::post('/register', [ RegisterController::class, 'store']);

// editar perfil de usario

Route::get('/editar-perfil', [ PerfilContoller::class, 'index'])->name ('perfil.index');
Route::post('/editar-perfil', [ PerfilContoller::class, 'store'])->name ('perfil.store');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/{user:username}', [PostController::class, 'index'])->name('posts.index');
Route::get('/post/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('post.store');
Route::get('{user:username}/posts/{post}', [PostController::class, 'show'])->name('post.show');
Route::delete('/posts/{post}', [PostController::class, 'destroy']) ->name('posts.destroy');

Route::post('{user:username}/posts/{post}', [ComentarioController::class, 'store'])->name('comentarios.store');


Route::post('/imagenes', [ImagenController::class, 'store'])->name('imagenes.store');


//Likes a las fotos
Route::post('/post({post}/likes', [LikeController::class, 'store'])->name('posts.likes.store');
Route::delete('/post({post}/likes', [LikeController::class, 'destroy'])->name('posts.likes.destroy');

// Follower

Route::post('/{user:username}/follow', [FollowerController::class, 'store'])->name('users.follow');
Route::delete('/{user:username}/unfollow', [FollowerController::class, 'destroy'])->name('users.unfollow');