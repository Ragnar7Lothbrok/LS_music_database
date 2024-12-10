@extends('layouts.main')

@section('content')
    <h2>Editar Canción</h2>

    <!-- Mostrar errores de validación -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Formulario para editar la canción -->
    <form action="{{ route('songs.update', $song->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Campo para modificar el título -->
        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $song->title }}" required>
        </div>

        <!-- Campo para modificar el grupo -->
        <div class="mb-3">
            <label for="group" class="form-label">Grupo</label>
            <input type="text" name="group" id="group" class="form-control" value="{{ $song->group }}" required>
        </div>

        <!-- Campo para modificar el estilo -->
        <div class="mb-3">
            <label for="style" class="form-label">Estilo</label>
            <input type="text" name="style" id="style" class="form-control" value="{{ $song->style }}" required>
        </div>

        <!-- Campo para modificar el año de lanzamiento -->
        <div class="mb-3">
            <label for="release_date" class="form-label">Año de Lanzamiento</label>
            <input type="number" name="release_date" id="release_date" class="form-control"
                   value="{{ $song->release_date }}" 
                   placeholder="Año de Lanzamiento" 
                   min="1900" max="{{ date('Y') }}" required>
        </div>

        <!-- Campo para modificar la puntuación -->
        <div class="mb-3">
            <label for="rating" class="form-label">Puntuación</label>
            <input type="number" name="rating" id="rating" class="form-control" 
                   value="{{ $song->rating }}" 
                   min="1" max="10" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
@endsection
