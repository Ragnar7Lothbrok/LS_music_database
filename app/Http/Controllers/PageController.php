<?php

namespace App\Http\Controllers;

use App\Models\Song; // Importar el modelo Song
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request)
    {
        $styles = Song::select('style')->distinct()->pluck('style');
        $songs = Song::when($request->styles, function ($query) use ($request) {
            return $query->whereIn('style', $request->styles);
        })->paginate(5);

        return view('home', compact('songs', 'styles'));
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
        $song = Song::findOrFail($id);
        return view('edit', compact('song'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'group' => 'required|string|max:255',
            'style' => 'required|string|max:50',
            'release_date' => 'required|integer|min:1900|max:' . date('Y'),
            'rating' => 'required|integer|min:1|max:10',
        ]);

        Song::create($validatedData);

        return redirect()->route('home')->with('success', '¡Canción añadida correctamente!');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'group' => 'required|string|max:255',
            'style' => 'required|string|max:50',
            'release_date' => 'required|integer|min:1900|max:' . date('Y'),
            'rating' => 'required|integer|min:1|max:10',
        ]);

        $song = Song::findOrFail($id);
        $song->update($validatedData);

        return redirect()->route('home')->with('success', '¡Canción actualizada correctamente!');
    }

    public function destroy(Request $request, $id)
    {
        $song = Song::findOrFail($id);
        $song->delete();

        return redirect()->route('home')->with('success', '¡Canción eliminada correctamente!');
    }

    public function editById()
    {
        return view('editById');
    }

    public function updateById(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:songs,id',
            'release_date' => 'nullable|integer|min:1900|max:' . date('Y'),
        ]);

        $song = Song::findOrFail($request->id);
        $song->update(array_filter($request->only(['title', 'group', 'style', 'release_date', 'rating'])));

        return redirect()->route('home')->with('success', '¡Canción actualizada correctamente!');
    }

    public function filterByYear(Request $request)
    {
        // Por ahora, simplemente devuelve una vista vacía
        return view('filterByYear');
    }

    public function filterByYearResults(Request $request)
    {
        // Validar el año ingresado
        $request->validate([
            'year' => 'required|integer|min:1900|max:' . date('Y'),
        ]);

        // Obtener las canciones del año especificado
        $songs = \App\Models\Song::where('release_date', $request->year)->get();

        // Retornar la vista con las canciones encontradas
        return view('filterByYear', compact('songs'));
    }
}
