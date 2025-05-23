<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Reserva de Salas')</title>
    <link rel="stylesheet" href="{{ asset('css/dark-custom.css') }}">
    @yield('head')
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('salas.index') }}">Salas Disponíveis</a>
            <a href="{{ route('reservas.create') }}">Reservar Sala</a>
            <a href="{{ route('salas.create') }}">Cadastrar Nova Sala</a>
        </nav>
        <h1>Reserva de Salas</h1>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>