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

    {{-- <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="../assets/css/vendor-fontawesome-free.css" rel="stylesheet">
    <link type="text/css" href="../assets/css/vendor-fontawesome-free.rtl.css" rel="stylesheet"> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

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

        <form style="padding-top: 20px;" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label class="text-label" for="name">Nombre Completo:</label>
                <div class="input-group input-group-merge">
                    <input id="name" type="text" for="name" name="name"
                        class="form-control form-control-prepended" placeholder="Nombre completo">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            {{-- <span class="far fa-user"></span> --}}
                            <i class="fa-solid fa-user"></i>
                        </div>
                    </div>
                  
                </div>
             
                @error('name')
                            <div style="color: red; padding: 1px;">{{ $message }}</div>
            @enderror
            </div>
           

            <div class="form-group">
                <label class="text-label" for="email">Correo Electrónico:</label>
                <div class="input-group input-group-merge">
                    <input id="email" for="email" name="email" type="email"
                        class="form-control form-control-prepended" placeholder="Correo electrónico">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            {{-- <span class="far fa-envelope"></span> --}}
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                    </div>
                </div>
                @error('email')
                            <div style="color: red; padding: 1px;">{{ $message }}</div>
            @enderror
            </div>
          

            <div class="form-group">
                <label class="text-label" for="phone">Número de teléfono:</label>
                <div class="input-group input-group-merge">
                    <input id="phone" name="phone" for="phone" type="text"
                        class="form-control form-control-prepended" placeholder="Número de teléfono">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                    </div>
                    
                </div>
                @error('phone')
                            <div style="color: red; padding: 1px;">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-group">
                <label class="text-label" for="password">Contraseña:</label>
                <div class="input-group input-group-merge">
                    <input id="password" type="password" for="password" name="password" autocomplete="new-password"
                        class="form-control form-control-prepended" placeholder="Ingresa tu contraseña">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                    </div>
                </div>
                @error('password')
                            <div style="color: red; padding: 1px;">{{ $message }}</div>
            @enderror
            </div>
     

            <div class="form-group">
                <label class="text-label" for="password_confirmation">Confirmar contraseña:</label>
                <div class="input-group input-group-merge">
                    <input id="password_confirmation" type="password" for="password_confirmation"
                        name="password_confirmation" autocomplete="new-password"
                        class="form-control form-control-prepended" placeholder="Confirma tu contraseña">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                    </div>
                </div>
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

            <style>
                /* Estilos para la ventana emergente */
                .popup {
                    display: none;
                    position: fixed;
                    z-index: 9999;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(0, 0, 0, 0.5);
                    padding: 50px;
                }

                .popup-content {
                    background-color: #fff;
                    padding: 20px;
                    max-width: 600px;
                    margin: 0 auto;
                    border-radius: 5px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                }

                .close {
                    
                    top: 10px;
                    right: 10px;
                    cursor: pointer;
                }
            </style>



            <div class="form-group mb-5">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" checked class="custom-control-input" for="terms" name="terms"
                        id="terms" />
                    <label class="custom-control-label" style="padding-top: 2px;" name="terms"
                        for="terms">Acepto <a href="#" id="openPopup">Términos y Condiciones</a></label>
                    <x-input-error :messages="$errors->get('terms')" class="mt-2" />
                </div>
            </div>

            <div id="popup" class="popup">
    <div class="popup-content">

        <h2>Términos y Condiciones - Utopia Beauty Salon</h2>
        <!-- Contenido de los términos y condiciones aquí -->
        <p>
            Reservas y Cancelaciones:
            Se recomienda reservar con anticipación. Cancelaciones con menos de 24 horas de anticipación
            pueden incurrir en cargos.
        </p>

        <p>
            Pagos:
            Se aceptan efectivo, tarjetas de crédito/débito y otros métodos electrónicos.
        </p>
        <p>
            Responsabilidad:
            No nos hacemos responsables por pérdidas o daños personales. Infórmanos sobre alergias o
            condiciones médicas.
        </p>
        <p>
            Comportamiento del Cliente:
            Se espera comportamiento respetuoso hacia el personal y otros clientes. Nos reservamos el
            derecho de negar el servicio por comportamiento inapropiado.
        </p>
        <p>
            Garantía:
            Si no estás satisfecho, comunícanoslo dentro de las 48 horas posteriores al servicio.
        </p>
        <p>
            Derechos de Autor:
            Todo contenido asociado con Utopia Beauty Salon es propiedad exclusiva nuestra.
        </p>

        <!-- Botón Aceptar -->
            <div  class="text-center">
            <button class="btn btn-success" style="margin-top: 20px;" id="acceptButton">Aceptar</button>
            </div>
    </div>
</div>


            <script>
                document.getElementById("openPopup").addEventListener("click", function(event) {
                    event.preventDefault();
                    document.getElementById("popup").style.display = "block";
                });

                document.getElementById("closePopup").addEventListener("click", function() {
                    document.getElementById("popup").style.display = "none";
                });

                // Cerrar la ventana emergente cuando se hace clic fuera de ella
                window.addEventListener("click", function(event) {
                    var popup = document.getElementById("popup");
                    if (event.target == popup) {
                        popup.style.display = "none";
                    }
                });
            </script>

            <div class="form-group text-center">
                <button class="btn btn-primary mb-2" type="submit">Crear Cuenta</button><br>
                <a class="text-body text-underline" href="{{ route('login') }}">Tienes una cuenta? ¡Inicia
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
