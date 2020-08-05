<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Federacion de Atletismo - Iniciar sesion')</title>
    <link rel="icon" href="/img/fedAtl_fav.ico">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>
</head>

<body>
    <div class="container bd-highligh text-center justify-content-center" style="padding-top: 40px;">
        <div class="row d-flex justify-content-center">
            <p class="text-center">
                <h1><b>Federacion de Atletismo | Bienvenid@s</b></h1>
            </p>
        </div>
        <div class="row justify-content-center p-4">
            <div class="wrapper fadeInDown center mx-auto">
                <div id="formContent">
                    <!-- Tabs Titles -->

                    <!-- Icon -->
                    <div class="fadeIn first">
                        <img src="/img/Federación_Salvadoreña_de_Atletismo.png" id="icon" alt="User Icon" />
                    </div>

                    <!-- Login Form -->
                    <form>
                        <input type="text" id="login" class="fadeIn second" name="login" placeholder="usuario">
                        <input type="password" id="password" class="fadeIn third" name="login" placeholder="contraseña">
                        <input type="submit" class="fadeIn fourth" value="Ingresar">
                    </form>

                    <!-- Register -->
                    <div id="formFooter">
                        <div>
                            <a class="underlineHover" href="/public/registrarEmpleado">Registrarse</a>
                        </div>
                        <div>
                            <a class="underlineHover" href="#">Has olvidado tu contraseña?</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row py-3">
            <div class="col bg-light text-primary">
                @include('partials.footer')
            </div>
        </div>
    </div>
</body>

</html>