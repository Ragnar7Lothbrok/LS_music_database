<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'home']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/add', [PageController::class, 'addSong']);
Route::post('/songs', [PageController::class, 'store'])->name('songs.store');
Route::get('/songs/{id}/edit', [PageController::class, 'editSong'])->name('songs.edit');
Route::put('/songs/{id}', [PageController::class, 'update'])->name('songs.update');
Route::delete('/songs/{id}', [PageController::class, 'destroy'])->name('songs.destroy');
