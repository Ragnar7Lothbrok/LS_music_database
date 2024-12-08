<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

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

    public function editSong($id)
    {
        // Buscar la canción por su ID
        $song = Song::findOrFail($id);

        // Pasar los datos de la canción a la vista de edición
        return view('edit', compact('song'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'title' => 'required|string|max:255',
            'group' => 'required|string|max:255',
            'style' => 'required|string|max:50',
            'release_date' => 'required|date',
            'rating' => 'required|integer|min:0|max:10',
        ]);

        // Crear una nueva canción en la base de datos
        Song::create($request->all());

        // Redirigir al home con un mensaje de éxito
        return redirect('/')->with('success', 'Canción añadida correctamente.');
    }

    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'title' => 'required|string|max:255',
            'group' => 'required|string|max:255',
            'style' => 'required|string|max:50',
            'release_date' => 'required|date',
            'rating' => 'required|integer|min:0|max:10',
        ]);

        // Buscar la canción por su ID y actualizarla
        $song = Song::findOrFail($id);
        $song->update($request->all());

        // Redirigir al home con un mensaje de éxito
        return redirect('/')->with('success', 'Canción modificada correctamente.');
    }

    public function destroy($id)
    {
        // Eliminar la canción por su ID
        Song::destroy($id);

        // Redirigir al home con un mensaje de éxito
        return redirect('/')->with('success', 'Canción eliminada correctamente.');
    }
}
