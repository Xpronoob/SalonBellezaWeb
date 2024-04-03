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

<body style="margin-top: 100px;"class="layout-login-centered-boxed">

    <div class="layout-login-centered-boxed__form card">
        <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-5 navbar-light">
            <a href="../index.html" class="navbar-brand flex-column mb-2 align-items-center mr-0" style="min-width: 0">
                <span class="text-primary mr-2">
                </span>
                <span>¡Recuperar Contraseña!</span>
            </a>
            <p class="m-0">Utopía Beauty Salón</p>
        </div>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        @isset($status)
            <div class="alert alert-soft-success d-flex" role="alert">
                <i class="material-icons mr-3">check_circle</i>
                {{-- <div class="text-body">¡Tu contraseña será enviada al correo electrónico registrado anteriormente!</div> --}}
                <div class="text-body">{{ $status }}</div>

            </div>
        @endisset

        <div class="page-separator">
            <div class="page-separator__text">Ingresar Credenciales</div>
        </div>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <label class="text-label" for="email">{{ __('Correo Electrónico') }}</label>
                <input placeholder="Correo Electrónico" id="email"
                    class="form-control @error('email') is-invalid @enderror" type="text" name="email"
                    value="{{ old('email') }}"  />
            
                @error('email')
                            <div style="color: red; padding: 1px;">{{ $message }}</div>
            @enderror
            </div>

            {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}

            <div class="form-group">
                <button type="submit"
                    class="btn btn-block btn-primary">{{ __('Enviar contraseña al correo') }}</button>
            </div>
        </form>

        <div class="form-group text-center">
            <a href="{{ route('login') }}">Iniciar Sesión</a> <br><br>
            No tienes una cuenta? <a class="text-body text-underline" href="{{ route('register') }}">Registrarse!</a>
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

</html>
