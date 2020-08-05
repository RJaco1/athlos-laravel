<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Federacion de Atletismo')</title>
    <link rel="icon" href="/img/fedAtl_fav.ico">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body>
    <div class="container p-3 bd-highlight">
        <div class="row shadow-lg">
            <div class="col">
                @include('partials.nav')
            </div>
        </div>
        <div class="row">
            <div class="p-2 bd-highlight"></div>
        </div>
        <div class="row shadow-lg">
            <div class="col">
                @yield('content')
            </div>
        </div>
        <div class="row">
            <div class="p-2 bd-highlight"></div>
        </div>
        <div class="row">
            <div class="col bg-light text-primary">
                @include('partials.footer')
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</html>