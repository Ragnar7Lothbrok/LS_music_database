@extends('layouts.main')

@section('content')
    <h2>Bienvenido a LaSalle Music</h2>
    <p>Lista de canciones:</p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Grupo</th>
                <th>Estilo</th>
                <th>Fecha de Lanzamiento</th>
                <th>Puntuación</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
