@extends('layouts.main')

@section('content')
    <h2 class="mb-4">Añadir Canción</h2>

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

    <!-- Mostrar mensaje de éxito -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Formulario para añadir una canción -->
    <form action="{{ route('songs.store') }}" method="POST">
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
            <label for="release_date" class="form-label">Año de Lanzamiento</label>
            <input type="number" class="form-control" id="release_date" name="release_date" 
                placeholder="Año de Lanzamiento" 
                min="1900" max="{{ date('Y') }}" required>
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Puntuación</label>
            <input type="number" class="form-control" id="rating" name="rating" placeholder="Puntuación (1-10)" min="1" max="10" required>
        </div>
        <button type="submit" class="btn btn-primary">Añadir</button>
    </form>
@endsection
