<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Ruta principal: Página de inicio con la lista de canciones
Route::get('/', [PageController::class, 'home'])->name('home');

// Ruta de contacto: Página de contacto
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Ruta para mostrar el formulario de añadir canciones
Route::get('/add', [PageController::class, 'addSong'])->name('songs.create');

// Ruta para mostrar el formulario de edición con un ID obligatorio
Route::get('/edit/{id}', [PageController::class, 'editSong'])->name('songs.edit');

// Ruta para guardar una nueva canción en la base de datos
Route::post('/songs', [PageController::class, 'store'])->name('songs.store');

// Ruta para actualizar una canción existente en la base de datos
Route::put('/songs/{id}', [PageController::class, 'update'])->name('songs.update');

// Ruta para eliminar una canción de la base de datos
Route::delete('/songs/{id}', [PageController::class, 'destroy'])->name('songs.destroy');

// Ruta para mostrar el formulario de modificación por ID
Route::get('/editById', [PageController::class, 'editById'])->name('songs.editById');

// Ruta para manejar la actualización por ID
Route::post('/songs/updateById', [PageController::class, 'updateById'])->name('songs.updateById');
