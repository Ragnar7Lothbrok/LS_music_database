@extends('layouts.main')

@section('content')
    <h2>Añadir Canción</h2>
    <form action="#" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Título de la canción" required>
        </div>
        <div class="mb-3">
            <label for="group" class="form-label">Grupo</label>
            <input type="text" class="form-control" id="group" name="group" placeholder="Grupo o Artista" required>
        </div>
        <div class="mb-3">
            <label for="style" class="form-label">Estilo</label>
            <input type="text" class="form-control" id="style" name="style" placeholder="Estilo musical" required>
        </div>
        <div class="mb-3">
            <label for="release_date" class="form-label">Fecha de Lanzamiento</label>
            <input type="date" class="form-control" id="release_date" name="release_date" required>
        </div>
        <div class="mb-3">
            <label for="rating" class="form-label">Puntuación</label>
            <input type="number" class="form-control" id="rating" name="rating" placeholder="Puntuación (0-10)" min="0" max="10" required>
        </div>
        <button type="submit" class="btn btn-primary">Añadir</button>
    </form>
@endsection
