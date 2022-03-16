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

Route::get('/', [\App\Http\Controllers\AlbumController::class, "index"])->name("home");
Route::get('/admin/album', [\App\Http\Controllers\AlbumAdminController::class, "index"])->name("admin-admin.index");
Route::get('/admin/album/create', [\App\Http\Controllers\AlbumAdminController::class, "create"])->name("admin-admin.create");
Route::post('/admin/album', [\App\Http\Controllers\AlbumAdminController::class, "store"])->name("admin-admin.store");
Route::get('/login', [\App\Http\Controllers\AuthController::class, "login"])->name("auth.login");
Route::post('/authenticate', [\App\Http\Controllers\AuthController::class, "authenticate"])->name("auth.authenticate");
Route::get('/register', [\App\Http\Controllers\RegisterController::class, "register"])->name("register.register");
Route::post('/register', [\App\Http\Controllers\RegisterController::class, "store"])->name("register.store");
