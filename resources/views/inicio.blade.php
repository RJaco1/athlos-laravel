@extends('layout')

@section('title','Federacion de Atletismo - Inicio')

@section('content')

<div class="row d-flex justify-content-center shadow-sm">
    <p>
        <h1><b>Eventos</b></h1>
        <br />
    </p>
</div>
<div class="card mb-3 py-3">
    <div class="row">
        <div class="col">
            <img src="http://placehold.it/200x200" alt="" class="img-rounded img-responsive" />
        </div>
        <div class="col">
            <h4>Bhaumik Patel</h4>
            <small><cite title="San Francisco, USA">San Francisco, USA <i class="glyphicon glyphicon-map-marker">
                    </i></cite></small>
            <p>
                <i class="glyphicon glyphicon-envelope"></i>email@example.com
                <br />
                <i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
                <br />
                <i class="glyphicon glyphicon-gift"></i>June 02, 1988</p>
        </div>
    </div>
</div>

@endsection
