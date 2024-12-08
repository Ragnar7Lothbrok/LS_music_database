@extends('layouts.main')

@section('content')
    <h2>Modificar Canción</h2>
    <p>Aquí podrás modificar o eliminar canciones de la base de datos.</p>
    <table class="table">
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
            <!-- Ejemplo de fila (se reemplazará con datos reales más adelante) -->
            <tr>
                <td>1</td>
                <td>Highway to Hell</td>
                <td>AC/DC</td>
                <td>Heavy Metal</td>
                <td>1979-07-27</td>
                <td>9</td>
                <td>
                    <button class="btn btn-warning btn-sm">Editar</button>
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
