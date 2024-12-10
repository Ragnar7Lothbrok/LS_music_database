@extends('layouts.main')

@section('content')
    <h2>Filtrar Canciones por Año</h2>

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

    <!-- Formulario para buscar canciones por año -->
    <form action="{{ route('songs.filterByYearResults') }}" method="GET" class="mb-4">
        @csrf
        <div class="mb-3">
            <label for="year" class="form-label">Año</label>
            <input type="number" class="form-control" id="year" name="year" placeholder="Introduce un año" required min="1900" max="{{ date('Y') }}">
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>

    <!-- Sección para mostrar resultados (si los hay) -->
    @if (isset($songs) && $songs->isNotEmpty())
        <h3>Canciones encontradas para el año {{ request('year') }}:</h3>
        <ul class="list-group">
            @foreach ($songs as $song)
                <li class="list-group-item">
                    <strong>{{ $song->title }}</strong> - {{ $song->group }} ({{ $song->release_date }})
                </li>
            @endforeach
        </ul>
    @elseif (isset($songs))
        <p class="text-muted">No se encontraron canciones para el año {{ request('year') }}.</p>
    @endif
@endsection
