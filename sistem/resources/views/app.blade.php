<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema')</title>
    @stack('css')
</head>
<body>
    <header>
        <h1>Bienvenido a mi Sistema</h1>
    </header>
    @include('partials.menu')
    <main>
        @yield('contenido')
    </main>
    <footer>
        <p>2025 - Sistema - DanielFM</p>
    </footer>

    @stack('scripts')
</body>
</html>