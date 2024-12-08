<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/home', [PageController::class, 'home']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/add', [PageController::class, 'addSong']);
Route::get('/update', [PageController::class, 'updateSong']);
