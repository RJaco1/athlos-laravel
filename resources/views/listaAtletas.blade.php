<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Federacion de Atletismo')</title>
    <link rel="icon" href="/img/fedAtl_fav.ico">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
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
                <div class="container">
                    <div class="row d-flex justify-content-center shadow-sm">
                        <h1> <b> Atletas </b></h1>
                    </div>
                    <div class="row d-flex justify-content-center shadow-sm py-3">
                        <table id="atleta" class="table table-striped table-bordered-0" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Pais</th>
                                    <th>DUI</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($atleta)
                                @foreach($atleta as $atletaItem)
                                <tr>
                                    <td>{{ $atletaItem->idatleta }}</td>
                                    <td>{{ $atletaItem->nombre }}</td>
                                    <td>{{ $atletaItem->apellido }}</td>
                                    <td>{{ $atletaItem->pais }}</td>
                                    <td>{{ $atletaItem->dui }}</td>
                                    <td>{{ $atletaItem->email }}</td>
                                </tr>
                                @endforeach
                                @endisset
                            </tbody>
                        </table>
                    </div>
                </div>
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
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

</html>