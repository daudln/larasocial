<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('home');
});


Route::get("/signin", [UserController::class, 'signin']);
Route::post("/login", [UserController::class, 'login']);
Route::get("/register", [UserController::class, 'register']);
Route::post("/signup", [UserController::class, 'signup']);
Route::post("/logout", [UserController::class, 'logout']);
Route::get("/posts", [PostController::class, 'posts']);
Route::get("/posts/{slug}", [PostController::class, 'post']);
