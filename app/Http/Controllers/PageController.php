<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    // Método para la página principal
    public function home()
    {
        return view('home'); // Renderiza la vista home.blade.php
    }

    // Método para la página de contacto
    public function contact()
    {
        return view('contact'); // Renderiza la vista contact.blade.php
    }

    // Método para añadir canción
    public function addSong()
    {
        return view('add'); // Renderiza la vista add.blade.php
    }

    // Método para modificar canción
    public function updateSong()
    {
        return view('update'); // Renderiza la vista update.blade.php
    }
}
