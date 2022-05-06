<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tienda de Video</title>

    <!-- Fonts -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- Uso de Livewire -->
    @livewireStyles
</head>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Tienda de Video</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Películas </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categorias">Categorías</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="autores">Autores</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<body>
    @yield('content')
    @livewireScripts
</body>

</html>
