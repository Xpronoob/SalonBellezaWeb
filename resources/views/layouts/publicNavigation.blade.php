<body class="layout-fixed">
    <div class="preloader"></div>

    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">
        <!-- Header -->

        <div id="header" class="mdk-header js-mdk-header m-0" data-fixed data-effects="waterfall">
            <div class="mdk-header__content">
                <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-dark pr-0" id="navbar" data-primary>
                    <div class="container">
                        <!-- Navbar toggler -->

                        <button class="navbar-toggler navbar-toggler-right d-block d-lg-none" type="button"
                            data-toggle="sidebar">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <!-- Navbar Brand -->
                        <a href="fixed-dashboard.html" class="navbar-brand">
                            <!--
                    <svg
                  class="mr-2"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor"
                  style="width: 20px"
                  viewBox="0 0 40 40"
                >
                  <path
                    d="M40 34.16666667c.01-3.21166667-2.58333333-5.82333334-5.795-5.835-1.94-.00666667-3.75666667.955-4.84166667 2.565-.10166666.155-.295.22333333-.47166666.16666666L11.94 25.66666667c-.19-.06-.31-.245-.28833333-.44333334.01-.07333333.015-.14833333.015-.22333333 0-.06833333-.005-.13833333-.01333334-.20666667-.02166666-.20166666.105-.39.3-.44666666l17.96-5.13c.13833334-.04.28666667-.005.39333334.09166666 1.05.97333334 2.42833333 1.51666667 3.86 1.525C37.38833333 20.83333333 40 18.22166667 40 15s-2.61166667-5.83333333-5.83333333-5.83333333C32.52 9.17166667 30.95333333 9.87833333 29.86 11.11c-.11.12166667-.28.16833333-.43666667.11833333L11.91 5.65333333c-.16-.05-.27333333-.19166666-.28833333-.35833333-.30333334-3.20166667-3.14333334-5.55166667-6.345-5.24833333S-.275 3.19.02833333 6.39166667c.28166667 2.99333333 2.79833334 5.28 5.805 5.275 1.64666667-.005 3.21333334-.71333334 4.30666667-1.945.11-.12166667.28-.16833334.43666667-.11833334l16.57 5.27166667c.22.06833333.34166666.30333333.27166666.52333333-.04166666.13333334-.14833333.23833334-.28333333.275L9.90333333 20.59666667c-.13333333.03833333-.275.00833333-.38166666-.08-1.03333334-.86833334-2.33833334-1.34666667-3.68833334-1.35C2.61166667 19.16666667 0 21.77833333 0 25s2.61166667 5.83333333 5.83333333 5.83333333c1.355-.005 2.665-.485 3.7-1.35833333.10833334-.09166667.25833334-.12.39333334-.07666667l18.29 5.81833334c.14.04333333.24666666.15666666.28.3.75666666 3.13166666 3.90833333 5.05666666 7.04 4.3C38.14833333 39.185 39.99 36.85333333 40 34.16666667z"
                  />
                </svg>
                     -->

                            <span>Salon de Belleza Utopía</span>
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
                                        <span class="flex navbar-notifications-menu__title m-0">Notifications</span>
                                        <a href="javascript:void(0)" class="text-muted"><small>Clear all</small></a>
                                    </div>
                                    <div class="navbar-notifications-menu__content" data-perfect-scrollbar>
                                        <div class="py-2">
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <div class="avatar avatar-sm" style="width: 32px; height: 32px">
                                                        <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg"
                                                            alt="Avatar" class="avatar-img rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <a href="">A.Demian</a> left a comment on
                                                    <a href="">FlowDash</a><br />
                                                    <small class="text-muted">1 minute ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs" style="width: 32px; height: 32px">
                                                            <span class="avatar-title bg-purple rounded-circle"><i
                                                                    class="material-icons icon-16pt">person_add</i></span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    New user <a href="#">Peter Parker</a> signed up.<br />
                                                    <small class="text-muted">1 hour ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs" style="width: 32px; height: 32px">
                                                            <span class="avatar-title rounded-circle">JD</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    <a href="#">Big Joe</a>
                                                    <small class="text-muted">wrote:</small><br />
                                                    <div>
                                                        Hey, how are you? What about our next meeting
                                                    </div>
                                                    <small class="text-muted">2 minutes ago</small>
                                                </div>
                                            </div>

                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <div class="avatar avatar-sm" style="width: 32px; height: 32px">
                                                        <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg"
                                                            alt="Avatar" class="avatar-img rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <a href="">A.Demian</a> left a comment on
                                                    <a href="">FlowDash</a><br />
                                                    <small class="text-muted">1 minute ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs" style="width: 32px; height: 32px">
                                                            <span class="avatar-title bg-purple rounded-circle"><i
                                                                    class="material-icons icon-16pt">person_add</i></span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    New user <a href="#">Peter Parker</a> signed up.<br />
                                                    <small class="text-muted">1 hour ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs"
                                                            style="width: 32px; height: 32px">
                                                            <span class="avatar-title rounded-circle">JD</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    <a href="#">Big Joe</a>
                                                    <small class="text-muted">wrote:</small><br />
                                                    <div>
                                                        Hey, how are you? What about our next meeting
                                                    </div>
                                                    <small class="text-muted">2 minutes ago</small>
                                                </div>
                                            </div>

                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <div class="avatar avatar-sm" style="width: 32px; height: 32px">
                                                        <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg"
                                                            alt="Avatar" class="avatar-img rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <a href="">A.Demian</a> left a comment on
                                                    <a href="">FlowDash</a><br />
                                                    <small class="text-muted">1 minute ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs"
                                                            style="width: 32px; height: 32px">
                                                            <span class="avatar-title bg-purple rounded-circle"><i
                                                                    class="material-icons icon-16pt">person_add</i></span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    New user <a href="#">Peter Parker</a> signed up.<br />
                                                    <small class="text-muted">1 hour ago</small>
                                                </div>
                                            </div>
                                            <div class="dropdown-item d-flex">
                                                <div class="mr-3">
                                                    <a href="#">
                                                        <div class="avatar avatar-xs"
                                                            style="width: 32px; height: 32px">
                                                            <span class="avatar-title rounded-circle">JD</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="flex">
                                                    <a href="#">Big Joe</a>
                                                    <small class="text-muted">wrote:</small><br />
                                                    <div>
                                                        Hey, how are you? What about our next meeting
                                                    </div>
                                                    <small class="text-muted">2 minutes ago</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);"
                                        class="dropdown-item text-center navbar-notifications-menu__footer">View
                                        All</a>
                                </div>
                            </li>
                        </ul>

                        @auth
                            <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
                                <li class="nav-item dropdown">
                                    <a href="#account_menu" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                        data-caret="false">
                                        <a href="#account_menu"
                                            class=" d-flex align-items-center nav-link dropdown-toggle"
                                            data-toggle="dropdown" data-caret="false">
                                            <span class="mr-2 d-flex-inline">
                                                <span class="text-light">{{ Auth::user()->name }}</span>
                                            </span>
                                            {{-- <img src="{{ asset('/ext/images/user.png') }}" class="rounded-circle"
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
                                                        class=""
                                                        style="width: 7%; margin-right:5px; margin-left:2px"
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
    <div class="mdk-header-layout__content page">
        <div class="page__header mb-0">
            <div class="container page__container">
                <div class="navbar navbar-secondary navbar-light navbar-expand-sm p-0">
                    <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse"
                        data-target="#navbarsExample03" type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="navbar-collapse collapse" id="navbarsExample03">
                        <ul class="nav navbar-nav">
                            <li class="nav-item dropdown {{ request()->is('/') ? 'active' : '' }}">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Inicio</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ url('./') }}">Inicio</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="{{ url('/citas') }}" class="nav-link dropdown-toggle"
                                    data-toggle="dropdown">Citas</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ url('/citas') }}">Cita</a>
                                    <a class="dropdown-item" href="{{ url('/admin/citas') }}">Admin Cita</a>
                                    <div class="dropdown-divider"></div>
                                    <div class="dropdown-header">Titulo</div>
                                    <a class="dropdown-item" href="{{ url('/citas/editar') }}">Editar Cita</a>
                                </div>
                            </li>
                            <script>
                                function myFunction() {
                                    var x = document.getElementById("myTopnav");

                                }
                            </script>
                            <li class="nav-item {{ request()->is('servicios*') ? 'active' : '' }}">
                                <a href="{{ url('/servicios') }}" class="nav-link dropdown-toggle"
                                    data-toggle="dropdown">Servicios</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ url('/servicios') }}">Servicio</a>
                                    <a class="dropdown-item d-flex align-items-center"
                                        href="{{ url('/servicios') }}">
                                        <span class="flex mr-2">Servicio</span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center active"
                                        href="{{ url('/servicios') }}">
                                        <span class="flex mr-2">Servicio</span>
                                        <span class="badge badge-primary">NUEVO</span>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown {{ request()->is('productos*') ? 'active' : '' }}">
                                <a href="#" class="nav-link dropdown-toggle"
                                    data-toggle="dropdown">Productos</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ url('/productos') }}">Producto 1</a>
                                    <a class="dropdown-item" href="{{ url('/admin/productos') }}">Admin
                                        Productos</a>
                                    <a class="dropdown-item" href="{{ url('/admin/productos/editar') }}">Admin
                                        Productos Editar</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown {{ request()->is('inventario*') ? 'active' : '' }}">
                                <a href="#" class="nav-link dropdown-toggle"
                                    data-toggle="dropdown">Inventario</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ url('/admin/inventario') }}">Admin
                                        Inventario</a>
                                    <a class="dropdown-item" href="{{ url('/admin/inventario/editar') }}">Admin
                                        Inventario Editar</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown {{ request()->is('inventario*') ? 'active' : '' }}">
                                <a href="#" class="nav-link dropdown-toggle"
                                    data-toggle="dropdown">Autenticación</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ url('iniciarsesion') }}">Iniciar
                                        Sesión</a>
                                    <a class="dropdown-item" href="{{ url('registrarse') }}">Registrarse</a>
                                    <a class="dropdown-item" href="{{ url('recuperar') }}">Recuperar
                                        Contraseña</a>
                                </div>
                            </li>
                            <li class="nav-item  {{ request()->is('inventario*') ? 'active' : '' }}">
                                <a class="dropdown-item" href="{{ url('proveedores') }}">Proveedores</a>
                            </li>
                            <li class="nav-item  {{ request()->is('inventario*') ? 'active' : '' }}">
                                <a class="dropdown-item" href="{{ url('categorias') }}">Categorias</a>
                            </li>
                            <li class="nav-item  {{ request()->is('inventario*') ? 'active' : '' }}">
                                <a class="dropdown-item" href="{{ url('contabilidad') }}">Contabilidad</a>
                            </li>
                            <li class="nav-item  {{ request()->is('inventario*') ? 'active' : '' }}">
                                <a class="dropdown-item" href="{{ url('citas') }}">Citas</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- VISTA -->
        <div class="container page__heading-container">
            <div class="page__heading d-flex align-items-center">
                <div class="flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="material-icons icon-20pt">home</i></a>
                            </li>
                            <li class="breadcrumb-item">RUTA</li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Pagina
                            </li>
                        </ol>
                    </nav>
                    <!-- <h1 class="m-0">TITULO</h1>  -->
                </div>

                <!-- <a href="" class="btn btn-success ml-1">Action</a> -->
            </div>
        </div>
        <div class="container page__container">
