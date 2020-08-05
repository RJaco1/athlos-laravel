@extends('layout')

@section('title','Federacion de Atletismo - Eventos')

@section('content')

<div class="container">
    <div class="row d-flex justify-content-center shadow-sm">
        <h1> <b> Eventos </b></h1>
    </div>
    <div class="row d-flex justify-content-center shadow-sm">
        <div>
            <a class="underlineHover" href="/public/nuevoEvento">Nuevo Evento +</a>
        </div>
    </div>
    <div class="row d-flex justify-content-center shadow-sm py-3">
        @isset($evento)
        @foreach($evento as $eventoItem)
        <div class="card mb-3 border-0">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $eventoItem->eventonombre }}</h5>
                <p class="card-text">Fecha: {{ $eventoItem->eventofecha }}</p>
                <p class="card-text"><small class="text-muted">{{ $eventoItem->created_at->diffForHumans() }}</small></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        @endforeach
        @endisset
    </div>
</div>
@endsection