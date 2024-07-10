<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Title --}}
    <title>{{ env('APP_NAME') }} | {{ $name ?? 'Demos' }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/index2.css') }}">
</head>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.15.0/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- DataTables CSS -->
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<body class="bg-">

    <header class="d-flex">
        <nav class="main-menu">
            <ul>
               <a href="{{ route ('index')}}"><li class="logo"><img src="{{ asset('img/logo.png') }}" alt="Accedo"></li></a>  <!-- Logo de la empresa -->
                <li><a href="#home">Home</a></li>
                <li><a href="#nosotros">Nosotros</a></li>
                <li><a href="#soporte-ayuda">Soporte y Ayuda</a></li>
                <li><a href="demo">Agendar Demo</a></li>
                @if (Auth::check()) <!-- Verifica si el usuario ha iniciado sesión -->
            <li><a href="home">Ver demo</a></li>
        @endif
            </ul>
        </nav>
        <div class="extra-options">
            @guest
                <!-- Mostrar solo si el usuario no está autenticado -->
                <a href="{{ route('register') }}" class="registro-btn"><strong>Registro</strong></a>
                <a href="{{ route('login') }}" class="login-btn">
                    <i class="bi bi-person-circle"></i> <!-- Icono de usuario -->
                    <p><strong>Login</strong></p> <!-- Botón de login -->
                </a>
            @else
                <!-- Mostrar solo si el usuario está autenticado -->
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="login-btn">
                        <i class="bi bi-person-circle"></i> <!-- Icono de usuario -->
                        <p><strong>Cerrar sesión</strong></p> <!-- Botón de cerrar sesión -->
                    </button>

                </form>
            @endguest
        </div>


    </header>


    {{-- Content --}}
    <main id="app"  class="main-content">


        {{ $slot }}
    </main>

	{{ $scripts ?? ''}}

    <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <!-- DataTable Initialization -->
    @stack('scripts')
</body>

</html>
