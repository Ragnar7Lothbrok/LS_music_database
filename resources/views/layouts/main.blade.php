<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaSalle Music</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Layout principal */
        html, body {
            height: 100%;
            margin: 0;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100%;
        }

        .content {
            flex: 1;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <header class="bg-primary text-white text-center py-3">
            <h1>LaSalle Music</h1>
        </header>
        <div class="container-fluid content">
            <div class="row">
                <nav class="col-md-3 bg-light sidebar py-3">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contacto</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('songs.create') }}">Añadir Canción</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('songs.editById') }}">Modificar Canción por ID</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('songs.filterByYear') }}">Filtrar por Año</a></li>
                    </ul>
                </nav>
                <main class="col-md-9 py-3">
                    @yield('content')
                </main>
            </div>
        </div>
        <footer class="bg-dark text-white text-center py-3">
            <p>&copy; 2024 LaSalle Music</p>
        </footer>
    </div>
</body>
</html>
