<nav class="navbar bg-white">
    <a class="navbar-brand" href="/public">Federacion de Atletismo</a>
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link {{setActive('inicio')}}" href="/public">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{setActive('eventos')}}" href="/public/eventos">Eventos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{request()->routeIs('listaAtletas') ? 'active' : ''}}" href="/public/listaAtletas">Listado Atletas</a>
        </li>
        <li class="nav-item"><a class="nav-link {{request()->routeIs('ruta') ? 'active' : ''}}" href="/public/login">Cerrar cesion</a></li>
    </ul>
</nav>