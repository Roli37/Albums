<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/artist', [\App\Http\Controllers\ArtistController::class, 'index'])->name('artist.index');
Route::post('/artist', [\App\Http\Controllers\ArtistController::class, 'store'])->name('artist.store');
Route::get('/artist/{artist}', [\App\Http\Controllers\ArtistController::class, 'show'])->name('artist.show');
Route::put('/artist/{artist}', [\App\Http\Controllers\ArtistController::class, 'update'])->name('artist.update');
Route::delete('/artist/{artist}', [\App\Http\Controllers\ArtistController::class, 'destroy'])->name('artist.destroy');

Route::get('/track', [\App\Http\Controllers\TrackController::class, 'index'])->name('track.index');
Route::post('/track', [\App\Http\Controllers\TrackController::class, 'store'])->name('track.store');
Route::get('/track/{track}', [\App\Http\Controllers\TrackController::class, 'show'])->name('track.show');
Route::put('/track/{track}', [\App\Http\Controllers\TrackController::class, 'update'])->name('track.update');
Route::delete('/track/{track}', [\App\Http\Controllers\TrackController::class, 'destroy'])->name('track.destroy');
