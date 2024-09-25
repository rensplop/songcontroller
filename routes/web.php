<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\SongController;

Route::get('/songs', [SongController::class, 'index']);
Route::get('/songs/create', [SongController::class, 'create']);
Route::post('/songs', [SongController::class, 'store']);
Route::get('/songs/{index}', [SongController::class, 'show']);
Route::get('/songs/{index}/edit', [SongController::class, 'edit']);

Route::put('/songs/{index}', [SongController::class, 'update']);