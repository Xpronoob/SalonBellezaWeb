<!doctype html>
<html lang="en">

<head>
    <title>CRUD Proveedores | Sprint 1</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <!-- As a link -->
    <nav class="navbar navbar-expand-lg navbar-dark p-3 bg-dark" id="headerNav">
        <div class="container-fluid"> <a class="navbar-brand d-block d-lg-none" href="#"> <img
                    src="{{ asset('assets/images/LogoSalon.png') }}" height="80" /> </a> <button
                class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="navbar-toggler-icon"></span> </button>
            <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto ">
                    <li class="nav-item"> <a class="nav-link mx-2 active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link mx-2" href="#">Productos</a> </li>
                    <li class="nav-item d-none d-lg-block"> <a class="nav-link mx-2" href="#"> <img
                                src="{{ asset('assets/images/LogoSalon.png') }}" height="80" /> </a> </li>
                    <li class="nav-item"> <a class="nav-link mx-2" href="#">Clientes</a> </li>
                    <li class="nav-item dropdown"> <a class="nav-link mx-2 dropdown-toggle" href="#"
                            id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Company </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Blog</a></li>
                            <li><a class="dropdown-item" href="#">Acerca de nosotros</a></li>
                            <li><a class="dropdown-item" href="#">Contacto</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    @yield('content')

    {{-- <div class="footer fixed-bottom bg-light">
        <footer class="py-3 my-4">
            <p class="text-center text-muted">&copy; 2022 FOOTER DE PRUEBA, Inc</p>
        </footer>
    </div> --}}
    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="my-5">
        <!-- Footer -->
        <footer class="text-center text-white fixed-bottom" style="background-color: #3f51b5">
            <!-- Grid container -->
            <div class="container">
                <!-- Section: Links -->
                <section class="mt-5">
                    <!-- Grid row-->
                    <div class="row text-center d-flex justify-content-center pt-5">
                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="#!" class="text-white">Sobre nosotros</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="#!" class="text-white">Productos</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="#!" class="text-white">Clientes</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="#!" class="text-white">Ayuda</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="#!" class="text-white">Contacto</a>
                            </h6>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row-->
                </section>
                <!-- Section: Links -->

                <hr class="my-5" />

                <!-- Section: Text -->

                <!-- Section: Text -->

                <!-- Section: Social -->
                <section class="text-center ">
                    <a href="" class="text-white me-4">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-github"></i>
                    </a>
                </section>
                <!-- Section: Social -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2020 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>
