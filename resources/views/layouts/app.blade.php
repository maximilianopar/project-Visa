<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Visagov</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    
</head>
<body>
    
    <div class="  p-3 mb-2 bg-bluee text-white">
        <div class="d-flex justify-content-start w-85 mx-auto">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/visagov.png') }}" class="ms-4" alt="Logo">
            </a>
            <a class="navbar-brand" href="{{ url('/') }}">
                <h2 class="p-1 ms-4">Visagov</h2> 
            </a>
        </div>
    </div>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm mx-auto w-75 mt-5">
            <div class="container">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('presentation') ? 'active' : '' }}" href="{{ url('/presentation') }}" style="width: 7%">
                            Visagov
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('books') ? 'active' : '' }}" href="{{ url('/books') }}" style="width: 7%">
                            Libros
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('contacts') ? 'active' : '' }}" href="{{ url('/contacts') }}" style="width: 7%">
                            Contacto
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
