<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaSalle Music</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="bg-primary text-white text-center py-3">
        <h1>LaSalle Music</h1>
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-3 bg-light sidebar py-3">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="/">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link" href="/add">Añadir Canción</a></li>
                    <li class="nav-item"><a class="nav-link" href="/update">Modificar Canción</a></li>
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
</body>
</html>
