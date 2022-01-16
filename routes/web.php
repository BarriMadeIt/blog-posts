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

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/add', [PostController::class, 'create']);
Route::post('/posts/save', [PostController::class, 'store']);
Route::get('/posts/{post}', [PostController::class, 'show']);
Route::get('/posts/edit/{post}', [PostController::class, 'edit']);
Route::put('/posts/update/{post}', [PostController::class, 'update']);
Route::delete('/posts/delete/{post}', [PostController::class, 'destroy']);
