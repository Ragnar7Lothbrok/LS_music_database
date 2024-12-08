<?php

namespace App\Http\Controllers;

use App\Models\Song;

class PageController extends Controller
{
    public function home()
    {
        // Recuperar todas las canciones de la base de datos
        $songs = Song::all();

        // Pasar las canciones a la vista
        return view('home', compact('songs'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function addSong()
    {
        return view('add');
    }

    public function updateSong()
    {
        return view('update');
    }
}
