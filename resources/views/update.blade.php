@extends('layouts.main')

@section('content')
    <h2>Modificar o Eliminar Canciones</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Grupo</th>
                <th>Estilo</th>
                <th>Fecha de Lanzamiento</th>
                <th>Puntuación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($songs as $song)
                <tr>
                    <td>{{ $song->id }}</td>
                    <td>{{ $song->title }}</td>
                    <td>{{ $song->group }}</td>
                    <td>{{ $song->style }}</td>
                    <td>{{ $song->release_date }}</td>
                    <td>{{ $song->rating }}</td>
                    <td>
                        <!-- Botón para editar -->
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
@endsection
