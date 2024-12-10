@extends('layouts.main')

@section('content')
    <h2>{{ isset($song) ? 'Editar Canción' : 'Buscar Canción para Modificar' }}</h2>

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

    <!-- Formulario para buscar o editar una canción -->
    <form action="{{ isset($song) ? route('songs.update', $song->id) : route('songs.editById') }}" method="POST">
        @csrf
        @if (isset($song))
            @method('PUT') <!-- Si estamos editando -->
        @endif

        <!-- Campo oculto para el ID si se está editando -->
        @if (isset($song))
            <input type="hidden" name="id" value="{{ $song->id }}">
        @else
            <!-- Campo para buscar una canción por ID -->
            <div class="mb-3">
                <label for="id" class="form-label">ID de la Canción</label>
                <input type="number" class="form-control" id="id" name="id" placeholder="ID de la Canción" required>
            </div>
        @endif

        <!-- Campos para los datos de la canción -->
        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $song->title ?? '' }}" placeholder="Título de la canción" {{ isset($song) ? 'required' : 'disabled' }}>
        </div>
        <div class="mb-3">
            <label for="group" class="form-label">Grupo</label>
            <input type="text" class="form-control" id="group" name="group" value="{{ $song->group ?? '' }}" placeholder="Grupo o Artista" {{ isset($song) ? 'required' : 'disabled' }}>
        </div>
        <div class="mb-3">
            <label for="style" class="form-label">Estilo</label>
            <input type="text" class="form-control" id="style" name="style" value="{{ $song->style ?? '' }}" placeholder="Estilo musical" {{ isset($song) ? 'required' : 'disabled' }}>
        </div>
        <div class="mb-3">
            <label for="release_date" class="form-label">Fecha de Lanzamiento</label>
            <input type="date" class="form-control" id="release_date" name="release_date" value="{{ $song->release_date ?? '' }}" {{ isset($song) ? 'required' : 'disabled' }}>
        </div>
        <div class="mb-3">
            <label for="rating" class="form-label">Puntuación</label>
            <input type="number" class="form-control" id="rating" name="rating" value="{{ $song->rating ?? '' }}" placeholder="Puntuación (1-10)" min="1" max="10" {{ isset($song) ? 'required' : 'disabled' }}>
        </div>

        <button type="submit" class="btn btn-primary">
            {{ isset($song) ? 'Guardar Cambios' : 'Buscar' }}
        </button>
    </form>
@endsection
