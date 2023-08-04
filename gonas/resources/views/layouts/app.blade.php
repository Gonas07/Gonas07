<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <header class="header">
            <div class="header__top-bar"></div>
            <nav class="header__nav">
                <div class="logo header__logo">
                    Ejemplo
                </div>
                <ul class="header__menu">
                    <li>
                        <a href="#">page 1</a>
                    </li>
                    <li>
                        <a href="#">page 2</a>
                    </li>
                    <li>
                        <a href="#">page 3</a>
                    </li>
                    <li>
                        <a href="#">page 4</a>
                    </li>
                </ul>
                <button class="header__button">
                    Ingresar
                </button>
            </nav>
        </header>
        <main class="main">
            @include('sidebars.main')
            @yield('content')
        </main>
        <footer>

        </footer>
    </div>
</body>

</html>
