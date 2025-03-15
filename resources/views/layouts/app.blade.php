<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Admin Parqueaderos') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    Admin de parqueaderos
                </a>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>

<style>

body {
    background-color: #0a0f1e; /* Azul muy oscuro */
    color: #cbd5e1; /* Gris claro para mejor contraste */
}

h1, h2, h3, h4, h5, h6 {
    color: #e2e8f0; /* Texto más claro para resaltar */
}

.table {
    color: #cbd5e1; /* Color de texto en tabla */
    background-color: #0f172a; /* Azul oscuro */
}

.table th {
    background-color: #1e293b; /* Azul más fuerte */
    color: #e2e8f0; /* Texto claro */
    border-color: #334155;
}

.table td {
    background-color: #0f172a;
    color: #cbd5e1;
    border-color: #334155;
}

/* Botones */
.btn-primary {
    background-color: #1e40af; /* Azul fuerte */
    border-color: #1e40af;
    color: white;
}

.btn-primary:hover {
    background-color: #1e60ff;
    border-color: #1e60ff;
}

.btn-warning {
    background-color: #facc15;
    color: black;
}

.btn-danger {
    background-color: #dc2626;
    color: white;
}

/* Tarjetas */
.card {
    background-color: #1e293b; /* Azul oscuro */
    border: 1px solid #1e3a8a;
}

/* Navbar */
.navbar {
    background-color: #0f172a;
    border-bottom: 1px solid #1e3a8a;
}

.navbar a {
    color: #e2e8f0 !important;
}

/* Inputs y formularios */
.form-control {
    background: rgba(255, 255, 255, 0.1) !important; /* Semi-transparente */
    color: white !important;
    border: 1px solid #1e3a8a !important;
}

.form-control::placeholder {
    color: #94a3b8 !important; /* Gris claro */
}

.form-control:focus {
    border-color: #1e40af !important;
    box-shadow: 0 0 10px #1e40af !important;
}

/* Fuerza el navbar a ser oscuro */
.navbar {
    background-color: #0f172a !important; /* Azul oscuro */
    border-bottom: 2px solid #1e3a8a !important;
}

.navbar a,
.navbar .navbar-brand,
.navbar .nav-link {
    color: #e2e8f0 !important; /* Texto claro */
}

.navbar .nav-link:hover {
    color: #1e60ff !important; /* Azul brillante al pasar el mouse */
}

.navbar-toggler {
    border-color: #1e3a8a !important;
}

.navbar-toggler-icon {
    background-color: white !important;
}

/* Dropdown (si tienes) */
.dropdown-menu {
    background-color: #1e293b !important;
    border: 1px solid #334155 !important;
}

.dropdown-item {
    color: #e2e8f0 !important;
}

.dropdown-item:hover {
    background-color: #1e40af !important;
    color: white !important;
}


</style>