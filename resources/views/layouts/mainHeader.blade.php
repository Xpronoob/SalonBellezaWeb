<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Utopía Salon</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">
    <style>
        {!! Vite::content('resources/assets/vendor/perfect-scrollbar.css') !!}
    </style>

    <style>
        {!! Vite::content('resources/assets/css/app.css') !!}
    </style>

    <style>
        {!! Vite::content('resources/assets/css/vendor-material-icons.css') !!}
    </style>

    <style>
        {!! Vite::content('resources/assets/css/vendor-fontawesome-free.css') !!}
    </style>

    <style>
        {!! Vite::content('resources/assets/css/vendor-flatpickr.css') !!}
    </style>

    <style>
        {!! Vite::content('resources/assets/css/vendor-flatpickr-airbnb.css') !!}
    </style>

    <style>
        {!! Vite::content('resources/assets/vendor/jqvmap/jqvmap.min.css') !!}
    </style>

    <style>
        {!! Vite::content('resources/assets/vendor/toastr.min.css') !!}
    </style>

    <!-- Perfect Scrollbar -->
    {{-- <link type="text/css" href="{{ asset('./assets/vendor/perfect-scrollbar.css') }} rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="{{ asset('./assets/css/app.css') }} rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="{{ asset('./assets/css/vendor-material-icons.css') }} rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="{{ asset('./assets/css/vendor-fontawesome-free.css') }} rel="stylesheet">

    <!-- Flatpickr -->
    <link type="text/css" href="{{ asset('./assets/css/vendor-flatpickr.css') }} rel="stylesheet">
    <link type="text/css" href="{{ asset('./assets/css/vendor-flatpickr-airbnb.css') }} rel="stylesheet">

    <!-- Vector Maps -->
    <link type="text/css" href="{{ asset('./assets/vendor/jqvmap/jqvmap.min.css') }} rel="stylesheet">

    <!-- Toastr -->
    <link type="text/css" href="{{ asset('./assets/vendor/toastr.min.css') }} rel="stylesheet"> --}}

    <!-- Global site tag (gtag.js) - Google Analytics -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133433427-1"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-133433427-1');
    </script> --}}

</head>

<body class="layout-default">

    <div class="preloader"></div>

    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">
        <!-- Header -->

        <div id="header" class="mdk-header js-mdk-header m-0" data-fixed data-effects="waterfall">
            <div class="mdk-header__content">
                <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-dark pr-0" id="navbar" data-primary>
                    <div class="container">
                        <!-- Navbar toggler -->

                        <a href="/">
                            <img src="{{ asset('assets/images/LogoSalon.png') }}" width="75" alt="Logo Salon">
                        </a>

                        <form class="search-form d-none d-sm-flex flex" action="fixed-index.html">
                            <button class="btn" type="submit">
                                <i class="material-icons">search</i>
                            </button>
                            <input type="text" class="form-control" placeholder="Buscar" />
                        </form>

                        <ul class="nav navbar-nav ml-auto d-none d-md-flex">
                            <li class="nav-item dropdown">
                                <a href="#notifications_menu" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                    data-caret="false">
                                    <i class="material-icons nav-icon navbar-notifications-indicator">notifications</i>
                                </a>
                                <div id="notifications_menu"
                                    class="dropdown-menu dropdown-menu-right navbar-notifications-menu">
                                    <div class="dropdown-item d-flex align-items-center py-2">
                                        <span class="flex navbar-notifications-menu__title m-0">Notificaciones</span>
                                        {{-- <a href="javascript:void(0)" class="text-muted"><small>Borrar Notificaciones</small></a> --}}
                                    </div>
                                    <div class="navbar-notifications-menu__content" data-perfect-scrollbar>
                                        <div class="py-2">
                                            @if ($lowStockProducts->isNotEmpty())
                                                @foreach ($lowStockProducts as $product)
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <div class="avatar avatar-sm"
                                                                style="width: 32px; height: 32px">
                                                                <img src="{{ $product->image }}" alt="Avatar"
                                                                    class="avatar-img rounded-circle" />
                                                            </div>
                                                        </div>
                                                        <div class="flex">
                                                            <p>El producto {{ $product->name }} se está agotando, tiene
                                                                un stock menor a 20</p>
                                                            {{-- <small class="text-muted">1 minute ago</small> --}}
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);"
                                        class="dropdown-item text-center navbar-notifications-menu__footer">Cerrar</a>
                                </div>
                            </li>
                        </ul>

                        @auth
                            <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
                                <li class="nav-item dropdown">
                                    <a href="#account_menu" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                        data-caret="false">
                                        <a href="#account_menu" class=" d-flex align-items-center nav-link dropdown-toggle"
                                            data-toggle="dropdown" data-caret="false">
                                            <span class="mr-2 d-flex-inline">
                                                <span class="text-light">{{ Auth::user()->name }}</span>
                                            </span>
                                            {{-- <img src="{{asset('{{ asset('/ext/images/user.png')}}') }}" class="rounded-circle"
                width="25" alt="Frontted" /> --}}
                                        </a>
                                        <div id="account_menu" class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-item-text dropdown-item-text--lh">
                                                <div><strong>{{ Auth::user()->name }}</strong></div>
                                                <div class="text-muted">{{ Auth::user()->email }}</div>
                                            </div>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ route('profile.edit') }}"><i
                                                    class="material-icons">account_circle</i> Mi perfil</a>
                                            <div class="dropdown-divider"></div>
                                            <style>
                                                #btnL {
                                                    background-color: white !important;
                                                    border-style: none;
                                                    /* border-color: rgb(242, 242, 242); */
                                                }
                                            </style>
                                            <form id="formL" action="{{ route('logout') }}" method="POST">

                                                @method('POST')
                                                @csrf
                                                <button class="dropdown-item" id="btnL" type="submit"><svg
                                                        class="" style="width: 7%; margin-right:5px; margin-left:2px"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                        <path
                                                            d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
                                                    </svg> Cerrar Sesión
                                    </a></button>

                                    </form>
                                    {{-- <script>
                                            const btnL = document.getElementById('btnLogout');
                                            const formL = document.getElementById('formL');

                                            btnL.addEventListener('click', function() {
                                                formL.submit();
                                            });
                                        </script> --}}
                                    {{-- <a class="dropdown-item" href="fixed-login.html"><i
                                                class="material-icons">exit_to_app</i> Cerrar Sesión</a> --}}
                        </div>
                        </li>
                        </ul>
                    @else
                        <a class="text-white" href="{{ route('login') }}">Iniciar Sesión</a>
                    @endauth

                </div>
            </div>
        </div>
    </div>

    <!-- // END Header -->

    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content">
