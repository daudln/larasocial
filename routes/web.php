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


Route::prefix("posts")->group(function () {
    Route::get("/", [PostController::class, 'posts'])->name("posts");
    Route::post("/create", [PostController::class, 'create'])->name("post-create");
    Route::get("/{slug}", [PostController::class, 'post'])->name("post");
});

Route::prefix('auth')->group(function () {
    Route::get("/signin", [UserController::class, 'signin'])->name("signin");
    Route::get("/register", [UserController::class, 'register'])->name("register");
    Route::post("/logout", [UserController::class, 'logout'])->name("logout");
    Route::post("/login", [UserController::class, 'login'])->name("login");
    Route::post("/signup", [UserController::class, 'signup'])->name("signup");
});
