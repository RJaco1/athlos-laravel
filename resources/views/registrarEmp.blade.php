<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Federacion de Atletismo - Registrar Empleado')</title>
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
                <nav class="navbar bg-white">
                    <a class="navbar-brand" href="/public">Federacion de Atletismo</a>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="p-2 bd-highlight"></div>
        </div>
        <div class="row shadow-lg">
            <div class="col">
                <div class="container">
                    <div class="form-sec">
                        <div class="row d-flex justify-content-center shadow-sm">
                            <h1> <b> Registrar Empleado </b></h1>
                        </div>
                        <div class="row d-flex justify-content-center shadow-sm">
                            <form id="form" method="POST" class="py-3 px-4 container justify-content-center shadow-sm" action="{{route('registrarEmp.store')}}">
                                @csrf
                                <!---------Nombre------------->
                                <div class="form-group">
                                    <label for="nombre" class="col-3">Nombre:</label>
                                    <input type="text" class="form-control bg-light shadow-sm @error('nombre') is-invalid @enderror border-0 col-6" id="nombre" placeholder="Nombre" name="nombre" value="{{old('nombre')}}">
                                    {!!$errors->first('nombre','<small>:message</small>')!!}
                                </div>
                                <!---------Apellido------------->
                                <div class="form-group">
                                    <label for="apellido" class="col-3">Apellido:</label>
                                    <input type="text" class="form-control bg-light shadow-sm @error('apellido') is-invalid @enderror border-0 col-6" id="apellido" placeholder="Apellido" name="apellido" value="{{old('apellido')}}">
                                    {!!$errors->first('apellido','<small>:message</small>')!!}
                                </div>
                                <!---------Genero------------->
                                <div class="form-group">
                                    <label for="GeneroSelect" class="col-3">Genero:</label>
                                    <select class="custom-select form-control bg-light shadow-sm @error('genero') is-invalid @enderror border-0 col-6" id="genero" name="genero" value="{{old('genero')}}">
                                        <option selected>Genero - Seleccione una opcion</option>
                                        <option value="F">Femenino</option>
                                        <option value="M">Masculino</option>
                                    </select>
                                </div>
                                <!---------DUI------------->
                                <div class="form-group">
                                    <label for="dui" class="col-3">DUI:</label>
                                    <input type="text" maxlength="10" class="form-control bg-light shadow-sm @error('dui') is-invalid @enderror border-0 col-6" id="dui" placeholder="DUI" name="dui" value="{{old('dui')}}">
                                    {!!$errors->first('dui','<small>:message</small>')!!}
                                </div>
                                <!---------Email------------->
                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <label for="email" class="col-3 py-3">Email:</label>
                                        {!!$errors->first('email','<small>:message</small>')!!}
                                    </div>
                                    <div class="col">
                                        <input type="email" class="form-control bg-light shadow-sm @error('email') is-invalid @enderror border-0 col-8" id="email" placeholder="Email" name="email" value="{{old('email')}}">
                                    </div>
                                </div>
                                <!---------Usuario------------->
                                <div class="form-group">
                                    <label for="usuario" class="col-3">Usuario:</label>
                                    <input type="text" class="form-control bg-light shadow-sm @error('usuario') is-invalid @enderror border-0 col-6" id="usuario" placeholder="Usuario" name="usuario" value="{{old('usuario')}}">
                                    {!!$errors->first('usuario','<small>:message</small>')!!}
                                </div>
                                <!---------Password------------->
                                <div class="form-group">
                                    <label for="password1" class="col-3">Contraseña:</label>
                                    <input type="password" class="form-control bg-light shadow-sm @error('contrasena') is-invalid @enderror border-0 col-6" id="password1" placeholder="Contraseña" name="contrasena">
                                    {!!$errors->first('contrasena','<small>:message</small>')!!}
                                </div>
                                <!---------Password~confirmar------------->
                                <div class="form-group">
                                    <label for="password2" class="col-3 py-2">Confirmar contraseña:</label>
                                    <input type="password" class="form-control bg-light shadow-sm @error('confirmar_contrasena') is-invalid @enderror border-0 col-6" id="password2" placeholder="Confirmar contraseña" name="confirmar_contrasena">
                                    {!!$errors->first('confirmar_contrasena','<small>:message</small>')!!}
                                </div>
                                <!-----file upload----------->
                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <a href="javascript:void(0)" onclick="$('#pro-image').click()" class="col-3">Fotografia</a>
                                    </div>
                                    <div class="col">
                                        <input type="file" id="pro-image" name="pro-image" value="{{old('pro-image')}}" style="display: none;" class="form-control">
                                    </div>
                                    <div class=" col-7">
                                    </div>
                                </div>
                                <!---------boton------------->
                                <div>
                                    <button type="submit" class="btn btn-primary ">Submit</button>
                                </div>
                            </form>
                        </div>
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

</html>