@extends('layouts.main')

@section('content')
    <h2>Modificar Canción por ID</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('songs.updateById') }}" method="POST">
        @csrf
        <!-- @method('PUT') Laravel interpreta esto como una solicitud PUT-->

        <div class="mb-3">
            <label for="id" class="form-label">ID de la Canción</label>
            <input type="number" class="form-control" id="id" name="id" placeholder="ID de la canción" required>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nuevo Título">
        </div>

        <div class="mb-3">
            <label for="group" class="form-label">Grupo</label>
            <input type="text" class="form-control" id="group" name="group" placeholder="Nuevo Grupo">
        </div>

        <div class="mb-3">
            <label for="style" class="form-label">Estilo</label>
            <input type="text" class="form-control" id="style" name="style" placeholder="Nuevo Estilo">
        </div>

        <div class="mb-3">
            <label for="release_date" class="form-label">Año de Lanzamiento</label>
            <input type="number" class="form-control" id="release_date" name="release_date" placeholder="Nuevo Año (1900-{{ date('Y') }})" min="1900" max="{{ date('Y') }}">
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Puntuación</label>
            <input type="number" class="form-control" id="rating" name="rating" placeholder="Nueva Puntuación (1-10)" min="1" max="10">
        </div>

        <button type="submit" class="btn btn-primary">Modificar</button>
    </form>
@endsection
