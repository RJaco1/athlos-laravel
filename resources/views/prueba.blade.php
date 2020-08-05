<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Federacion de Atletismo - Registrar Empleado')</title>
    <link rel="icon" href="/img/fedAtl_fav.ico">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>

<body>
    <form>
        @csrf
        <div>
            <input type="text" id="texto" />
            <button type="button" id="btn">Insertar Texto</button>
        </div>
    </form>
    <div id="mostrar">

    </div>
</body>

</html>