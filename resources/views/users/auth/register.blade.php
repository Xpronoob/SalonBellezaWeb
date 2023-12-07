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

<body class="layout-login-centered-boxed">

    <div class="layout-login-centered-boxed__form card">
        <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-5 navbar-light">
            <a href="../index.html" class="navbar-brand flex-column mb-2 align-items-center mr-0" style="min-width: 0">
                <img class="navbar-brand-icon mr-0 mb-2" src="../assets/images/LogoSalon.png" width="150"
                    alt="FlowDash">
                <span style="padding-top: 20px;">Utopía Beauty Salon</span>
            </a>
            <p class="m-0">Crea una cuenta en nuesto Sitio Web</p>
        </div>

        <div class="page-separator">
            <div class="page-separator__text">Ingresar Credenciales</div>
        </div>

        <form style="padding-top: 20px;" action="../index.html" novalidate>
            <div class="form-group">
                <label class="text-label" for="name_2">Nombre Completo:</label>
                <div class="input-group input-group-merge">
                    <input id="name_2" type="text" required="" class="form-control form-control-prepended"
                        placeholder="Alejandro Rojas" required>
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="far fa-user"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="text-label" for="email_2">Correo Electrónico:</label>
                <div class="input-group input-group-merge">
                    <input id="email_2" type="email" class="form-control form-control-prepended"
                        placeholder="Alejandro@gmail.com" required>
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="far fa-envelope"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="text-label" for="password_2">Contraseña:</label>
                <div class="input-group input-group-merge">
                    <input id="password_2" type="password" required="" class="form-control form-control-prepended"
                        placeholder="Ingresa tu contraseña" required>
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="far fa-key"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group mb-5">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" checked class="custom-control-input" id="terms" />
                    <label class="custom-control-label" style="padding-top: 2px;" for="terms">Acepto <a
                            href="#TERMINOS Y CONDICIONES">Terminos y Condiciones</a></label>
                </div>
            </div>
            <div class="form-group text-center">
                <button class="btn btn-primary mb-2" type="submit">Crear Cuenta</button><br>
                <a class="text-body text-underline" href="{{ url('./iniciarsesion') }}">Tienes una cuenta? ¡Inicia
                    Sesión!</a>
            </div>
        </form>
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
