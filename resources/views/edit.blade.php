@extends('layouts.main')

@section('content')
    <h2>Editar Canción</h2>
    <form action="{{ route('songs.update', $song->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $song->title }}" required>
        </div>
        <div class="mb-3">
            <label for="group" class="form-label">Grupo</label>
            <input type="text" name="group" id="group" class="form-control" value="{{ $song->group }}" required>
        </div>
        <div class="mb-3">
            <label for="style" class="form-label">Estilo</label>
            <input type="text" name="style" id="style" class="form-control" value="{{ $song->style }}" required>
        </div>
        <div class="mb-3">
            <label for="release_date" class="form-label">Fecha de Lanzamiento</label>
            <input type="date" name="release_date" id="release_date" class="form-control" value="{{ $song->release_date }}" required>
        </div>
        <div class="mb-3">
            <label for="rating" class="form-label">Puntuación</label>
            <input type="number" name="rating" id="rating" class="form-control" value="{{ $song->rating }}" min="0" max="10" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
@endsection
