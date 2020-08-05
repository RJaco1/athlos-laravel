@extends('layout')

@section('title','Federacion de Atletismo - Lista Eventos')

@section('content')
<div class="container">

    <div class="form-sec">
        <div class="row d-flex justify-content-center shadow-sm">
            <h1> <b> Nuevo Evento </b></h1>
        </div>
        <div class="row d-flex justify-content-center shadow-sm">
            <form method="POST" class="py-3 px-4 container justify-content-center shadow-sm" action="{{route('nuevoEvento.store')}}">
                @csrf
                <!---------Nombre Evento------------->
                <div class="form-group">
                    <label for="nomevento" class="col-3">Nombre del evento:</label>
                    <input type="text" class="form-control bg-light shadow-sm @error('nomevento') is-invalid @enderror border-0 col-6" id="nomevento" placeholder="Nombre del evento" name="nomevento" value="{{old('nomevento')}}">
                    {!!$errors->first('nomevento','<small>:message</small>')!!}
                </div>
                <!---------Fecha Evento------------->
                <div class="form-group">
                    <label for="fechaevento" class="col-3">Fecha:</label>
                    <input type="date" class="form-control bg-light shadow-sm @error('fechaevento') is-invalid @enderror border-0 col-6" id="fechaevento" placeholder="Fecha del evento" name="fechaevento" value="{{old('fechaevento')}}">
                    {!!$errors->first('fechaevento','<small>:message</small>')!!}
                </div>
                <!---------Hora------------->
                <div class="form-group">
                    <label for="horaevento" class="col-3">Hora:</label>
                    <input type="time" class="form-control bg-light shadow-sm @error('horaevento') is-invalid @enderror border-0 col-6" id="horaevento" placeholder="Hora del evento" name="horaevento" value="{{old('horaevento')}}">
                    {!!$errors->first('horaevento','<small>:message</small>')!!}
                </div>
                <!---------Fecha limete inscripcion------------->
                <div class="form-group">
                    <label for="fechalimins" class="col-3">Fecha limite de inscripcion:</label>
                    <input type="date" maxlength="10" class="form-control bg-light shadow-sm @error('fechalimins') is-invalid @enderror border-0 col-6" id="fechalimins" placeholder="Fecha limite de Inscripcion" name="fechalimins" value="{{old('fechalimins')}}">
                    {!!$errors->first('fechalimins','<small>:message</small>')!!}
                </div>
                <!---------boton------------->
                <div>
                    <button type="submit" class="btn btn-primary ">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection