<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="../assets/vendor/perfect-scrollbar.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="../assets/css/app.css" rel="stylesheet">
    <link type="text/css" href="../assets/css/app.rtl.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="../assets/css/vendor-material-icons.css" rel="stylesheet">
    <link type="text/css" href="../assets/css/vendor-material-icons.rtl.css" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="../assets/css/vendor-fontawesome-free.css" rel="stylesheet">
    <link type="text/css" href="../assets/css/vendor-fontawesome-free.rtl.css" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133433427-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-133433427-1');
    </script>

</head>

<body class="layout-login">
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="layout-login__overlay"></div>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="layout-login__form bg-white" data-perfect-scrollbar>
            <div class="d-flex justify-content-center mt-2 mb-5 navbar-light">
                <a href="../index.html" class="navbar-brand" style="min-width: 0">
                    {{-- <img class="navbar-brand-icon" src="../assets/images/LogoSalon.png" width="100" alt=""> --}}
                    <img class="navbar-brand-icon" src="{{ asset('assets/images/LogoSalon.png') }}" width="100"
                        alt="">
                    <span></span>
                </a>
            </div>

            <h4 class="m-0">Utopía Beauty Salón</h4> <br>
            <p class="mb-5">Ingresa las credenciales para iniciar sesión:</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label class="text-label" for="email" name="email">Correo Electrónico:</label>
                    <div class="input-group input-group-merge">
                        <input id="email" for="email" name="email" type="text" value="{{ old('email') }}"
                            class="form-control form-control-prepended" placeholder="Correo Electrónico">

                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="far fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error('email')
                        <div style="color: red; padding: 1px;">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group">
                    <label class="text-label" for="password" name="password">Contraseña:</label>
                    <div class="input-group input-group-merge">
                        <input id="password" for="password" name="password" type="password"
                            value="{{ old('password') }}" class="form-control form-control-prepended"
                            placeholder="Ingresa la contraseña">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fa fa-key"></span>
                            </div>
                        </div>
                    </div>
                    @error('password')
                        <div style="color: red; padding: 1px;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-5">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" checked="" id="remember">
                        <label class="custom-control-label" style="padding-top: 2px;" for="remember">Recordar
                            credenciales</label>
                    </div>
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-primary mb-5" type="submit">Iniciar Sesión</button> <br>
                    <a href="{{ route('password.request') }}">¿Olvidaste la contraseña?</a> <br><br>
                    No tienes cuenta? <a class="text-body text-underline"
                        href="{{ route('register') }}">¡Registrate!</a>
                </div>
            </form>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="../assets/vendor/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap.min.js"></script>

    <!-- Perfect Scrollbar -->
    <script src="../assets/vendor/perfect-scrollbar.min.js"></script>

    <!-- DOM Factory -->
    <script src="../assets/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="../assets/vendor/material-design-kit.js"></script>

    <!-- App -->
    <script src="../assets/js/toggle-check-all.js"></script>
    <script src="../assets/js/check-selected-row.js"></script>
    <script src="../assets/js/dropdown.js"></script>
    <script src="../assets/js/sidebar-mini.js"></script>
    <script src="../assets/js/app.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="../assets/js/app-settings.js"></script>

</body>
