<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return "Página Principal";
    }

    public function contact()
    {
        return "Página de Contacto";
    }

    public function addSong()
    {
        return "Añadir Canción";
    }

    public function updateSong()
    {
        return "Modificar Canción";
    }
}
