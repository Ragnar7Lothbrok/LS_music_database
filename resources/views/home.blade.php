@extends('layouts.main')

@section('content')
    <h2>Bienvenido a LaSalle Music</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Filtro por géneros -->
    <h3>Filtrar por Género</h3>
    <form method="GET" action="{{ route('home') }}" class="mb-4">
        <div class="mb-3">
            @foreach ($styles as $style)
                <label class="me-2">
                    <input type="checkbox" name="styles[]" value="{{ $style }}" 
                    {{ in_array($style, request('styles', [])) ? 'checked' : '' }}>
                    {{ $style }}
                </label>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Aplicar Filtros</button>
        <a href="{{ route('home') }}" class="btn btn-secondary btn-sm">Limpiar Filtros</a>
    </form>

    <!-- Lista de canciones -->
    <h3>Lista de Canciones</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Título</th>
                <th class="text-center">Grupo</th>
                <th class="text-center">Estilo</th>
                <th class="text-center">Año de Lanzamiento</th>
                <th class="text-center">Puntuación</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($songs as $song)
                <tr>
                    <td class="text-center">{{ $song->id }}</td>
                    <td class="text-center">{{ $song->title }}</td>
                    <td class="text-center">{{ $song->group }}</td>
                    <td class="text-center">{{ $song->style }}</td>
                    <td class="text-center">{{ $song->release_date }}</td>
                    <td class="text-center">{{ $song->rating }}</td>
                    <td class="text-center">
                        <!-- Botón para modificar -->
                        <a href="{{ route('songs.edit', $song->id) }}" class="btn btn-warning btn-sm">Modificar</a>

                        <!-- Botón para eliminar -->
                        <form action="{{ route('songs.destroy', $song->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Paginación -->
    <div class="d-flex justify-content-center">
        {{ $songs->appends(request()->query())->links('pagination::bootstrap-5') }}
    </div>
@endsection
