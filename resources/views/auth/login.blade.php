@extends('layouts.app')

@section('content')
<div class="container bd-highligh text-center justify-content-center" style="padding-top: 40px;">
    <div class=" row d-flex justify-content-center">
        <p class="text-center">
            <h1><b>Federacion de Atletismo | Bienvenid@s</b></h1>
        </p>
    </div>
    <div class="row justify-content-center p-4">
        <div class="wrapper fadeInDown center mx-auto">
            <div id="formContent">
                <div class="fadeIn first">
                    <img src="/img/Federación_Salvadoreña_de_Atletismo.png" id="icon" alt="User Icon" />
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <input id="email" type="text" class="fadeIn second @error('email') is-invalid @enderror" name="email" placeholder="usuario" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <input id="password" type="password" class="fadeIn third @error('password') is-invalid @enderror" name="password" placeholder="contraseña" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Recuerdame') }}
                        </label>
                    </div>
                    <input type="submit" class="btn btn-primary fadeIn fourth" value="{{ __('Ingresar') }}">
                    <div id="formFooter">
                        <a class="underlineHover" href="/public/registrarEmpleado">Registrarse</a>
                        @if (Route::has('password.request'))
                        <a class="underlineHover" href="{{ route('password.request') }}">
                            {{ __('Has olvidado tu contraseña?') }}
                        </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row py-3">
        <div class="col bg-light text-primary">
            @include('partials.footer')
        </div>
    </div>
</div>
@endsection