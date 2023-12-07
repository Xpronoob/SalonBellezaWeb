<x-public-layout>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Gestione sus citas</title>

        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots" content="noindex">

        <!-- Perfect Scrollbar -->
        <link type="text/css" href="../../assets/vendor/perfect-scrollbar.css" rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css" href="../../assets/css/app.css" rel="stylesheet">
        <link type="text/css" href="../../assets/css/app.rtl.css" rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css" href="../../assets/css/vendor-material-icons.css" rel="stylesheet">
        <link type="text/css" href="../../assets/css/vendor-material-icons.rtl.css" rel="stylesheet">

        <!-- Font Awesome FREE Icons -->
        <link type="text/css" href="../../assets/css/vendor-fontawesome-free.css" rel="stylesheet">
        <link type="text/css" href="../../assets/css/vendor-fontawesome-free.rtl.css" rel="stylesheet">

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

        <!-- Flatpickr -->
        <link type="text/css" href="../../assets/css/vendor-flatpickr.css" rel="stylesheet">
        <link type="text/css" href="../../assets/css/vendor-flatpickr.rtl.css" rel="stylesheet">
        <link type="text/css" href="../../assets/css/vendor-flatpickr-airbnb.css" rel="stylesheet">
        <link type="text/css" href="../../assets/css/vendor-flatpickr-airbnb.rtl.css" rel="stylesheet">

        <!-- Quill Theme -->
        <link type="text/css" href="../../assets/css/vendor-quill.css" rel="stylesheet">
        <link type="text/css" href="../../assets/css/vendor-quill.rtl.css" rel="stylesheet">

        <!-- Dropzone -->
        <link type="text/css" href="../../assets/css/vendor-dropzone.css" rel="stylesheet">
        <link type="text/css" href="../../assets/css/vendor-dropzone.rtl.css" rel="stylesheet">

        <!-- Select2 -->
        <link type="text/css" href="../../assets/css/vendor-select2.css" rel="stylesheet">
        <link type="text/css" href="../../assets/css/vendor-select2.rtl.css" rel="stylesheet">
        <link type="text/css" href="../../assets/vendor/select2/select2.min.css" rel="stylesheet">

    </head>

    <body class="layout-default">

        <div class="preloader"></div>

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->

            <div id="header" class="mdk-header js-mdk-header m-0" data-fixed>
                <div class="mdk-header__content">

                    <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-dark  pr-0" id="navbar"
                        data-primary>
                        <div class="container-fluid p-0">

                            <!-- Navbar toggler -->

                            <button class="navbar-toggler navbar-toggler-right d-block d-lg-none" type="button"
                                data-toggle="sidebar">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <!-- Navbar Brand -->
                            <a href="../../index.html" class="navbar-brand ">

                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    style="width:20px;" viewBox="0 0 40 40">
                                    <path
                                        d="M40 34.16666667c.01-3.21166667-2.58333333-5.82333334-5.795-5.835-1.94-.00666667-3.75666667.955-4.84166667 2.565-.10166666.155-.295.22333333-.47166666.16666666L11.94 25.66666667c-.19-.06-.31-.245-.28833333-.44333334.01-.07333333.015-.14833333.015-.22333333 0-.06833333-.005-.13833333-.01333334-.20666667-.02166666-.20166666.105-.39.3-.44666666l17.96-5.13c.13833334-.04.28666667-.005.39333334.09166666 1.05.97333334 2.42833333 1.51666667 3.86 1.525C37.38833333 20.83333333 40 18.22166667 40 15s-2.61166667-5.83333333-5.83333333-5.83333333C32.52 9.17166667 30.95333333 9.87833333 29.86 11.11c-.11.12166667-.28.16833333-.43666667.11833333L11.91 5.65333333c-.16-.05-.27333333-.19166666-.28833333-.35833333-.30333334-3.20166667-3.14333334-5.55166667-6.345-5.24833333S-.275 3.19.02833333 6.39166667c.28166667 2.99333333 2.79833334 5.28 5.805 5.275 1.64666667-.005 3.21333334-.71333334 4.30666667-1.945.11-.12166667.28-.16833334.43666667-.11833334l16.57 5.27166667c.22.06833333.34166666.30333333.27166666.52333333-.04166666.13333334-.14833333.23833334-.28333333.275L9.90333333 20.59666667c-.13333333.03833333-.275.00833333-.38166666-.08-1.03333334-.86833334-2.33833334-1.34666667-3.68833334-1.35C2.61166667 19.16666667 0 21.77833333 0 25s2.61166667 5.83333333 5.83333333 5.83333333c1.355-.005 2.665-.485 3.7-1.35833333.10833334-.09166667.25833334-.12.39333334-.07666667l18.29 5.81833334c.14.04333333.24666666.15666666.28.3.75666666 3.13166666 3.90833333 5.05666666 7.04 4.3C38.14833333 39.185 39.99 36.85333333 40 34.16666667z" />
                                </svg>

                                <span>flowdash</span>
                            </a>

                            <form class="search-form d-none d-sm-flex flex" action="../../index.html">
                                <button class="btn" type="submit"><i class="material-icons">search</i></button>
                                <input type="text" class="form-control" placeholder="Search">
                            </form>

                            <ul class="nav navbar-nav ml-auto d-none d-md-flex">
                                <li class="nav-item dropdown">
                                    <a href="#notifications_menu" class="nav-link dropdown-toggle"
                                        data-toggle="dropdown" data-caret="false">
                                        <i
                                            class="material-icons nav-icon navbar-notifications-indicator">notifications</i>
                                    </a>
                                    <div id="notifications_menu"
                                        class="dropdown-menu dropdown-menu-right navbar-notifications-menu">
                                        <div class="dropdown-item d-flex align-items-center py-2">
                                            <span
                                                class="flex navbar-notifications-menu__title m-0">Notifications</span>
                                            <a href="javascript:void(0)" class="text-muted"><small>Clear
                                                    all</small></a>
                                        </div>
                                        <div class="navbar-notifications-menu__content" data-perfect-scrollbar>
                                            <div class="py-2">

                                                <div class="dropdown-item d-flex">
                                                    <div class="mr-3">
                                                        <div class="avatar avatar-sm"
                                                            style="width: 32px; height: 32px;">
                                                            <img src="../../assets/images/256_daniel-gaffey-1060698-unsplash.jpg"
                                                                alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex">
                                                        <a href="">A.Demian</a> left a comment on <a
                                                            href="">FlowDash</a><br>
                                                        <small class="text-muted">1 minute ago</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item d-flex">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <div class="avatar avatar-xs"
                                                                style="width: 32px; height: 32px;">
                                                                <span class="avatar-title bg-purple rounded-circle"><i
                                                                        class="material-icons icon-16pt">person_add</i></span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="flex">
                                                        New user <a href="#">Peter Parker</a> signed up.<br>
                                                        <small class="text-muted">1 hour ago</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item d-flex">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <div class="avatar avatar-xs"
                                                                style="width: 32px; height: 32px;">
                                                                <span class="avatar-title rounded-circle">JD</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="flex">
                                                        <a href="#">Big Joe</a> <small
                                                            class="text-muted">wrote:</small><br>
                                                        <div>Hey, how are you? What about our next meeting</div>
                                                        <small class="text-muted">2 minutes ago</small>
                                                    </div>
                                                </div>

                                                <div class="dropdown-item d-flex">
                                                    <div class="mr-3">
                                                        <div class="avatar avatar-sm"
                                                            style="width: 32px; height: 32px;">
                                                            <img src="../../assets/images/256_daniel-gaffey-1060698-unsplash.jpg"
                                                                alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex">
                                                        <a href="">A.Demian</a> left a comment on <a
                                                            href="">FlowDash</a><br>
                                                        <small class="text-muted">1 minute ago</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item d-flex">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <div class="avatar avatar-xs"
                                                                style="width: 32px; height: 32px;">
                                                                <span class="avatar-title bg-purple rounded-circle"><i
                                                                        class="material-icons icon-16pt">person_add</i></span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="flex">
                                                        New user <a href="#">Peter Parker</a> signed up.<br>
                                                        <small class="text-muted">1 hour ago</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item d-flex">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <div class="avatar avatar-xs"
                                                                style="width: 32px; height: 32px;">
                                                                <span class="avatar-title rounded-circle">JD</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="flex">
                                                        <a href="#">Big Joe</a> <small
                                                            class="text-muted">wrote:</small><br>
                                                        <div>Hey, how are you? What about our next meeting</div>
                                                        <small class="text-muted">2 minutes ago</small>
                                                    </div>
                                                </div>

                                                <div class="dropdown-item d-flex">
                                                    <div class="mr-3">
                                                        <div class="avatar avatar-sm"
                                                            style="width: 32px; height: 32px;">
                                                            <img src="../../assets/images/256_daniel-gaffey-1060698-unsplash.jpg"
                                                                alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex">
                                                        <a href="">A.Demian</a> left a comment on <a
                                                            href="">FlowDash</a><br>
                                                        <small class="text-muted">1 minute ago</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item d-flex">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <div class="avatar avatar-xs"
                                                                style="width: 32px; height: 32px;">
                                                                <span class="avatar-title bg-purple rounded-circle"><i
                                                                        class="material-icons icon-16pt">person_add</i></span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="flex">
                                                        New user <a href="#">Peter Parker</a> signed up.<br>
                                                        <small class="text-muted">1 hour ago</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item d-flex">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <div class="avatar avatar-xs"
                                                                style="width: 32px; height: 32px;">
                                                                <span class="avatar-title rounded-circle">JD</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="flex">
                                                        <a href="#">Big Joe</a> <small
                                                            class="text-muted">wrote:</small><br>
                                                        <div>Hey, how are you? What about our next meeting</div>
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

                            <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
                                <li class="nav-item dropdown">
                                    <a href="#account_menu" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                        data-caret="false">
                                        <span class="mr-1 d-flex-inline">
                                            <span class="text-light">Adrian D.</span>
                                        </span>
                                        <img src="../../assets/images/avatar/demi.png" class="rounded-circle"
                                            width="32" alt="Frontted">
                                    </a>
                                    <div id="account_menu" class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-item-text dropdown-item-text--lh">
                                            <div><strong>Adrian Demian</strong></div>
                                            <div class="text-muted">@adriandemian</div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="../../index.html"><i
                                                class="material-icons">dvr</i> Dashboard</a>
                                        <a class="dropdown-item" href="../../profile.html"><i
                                                class="material-icons">account_circle</i> My profile</a>
                                        <a class="dropdown-item" href="../../edit-account.html"><i
                                                class="material-icons">edit</i> Edit account</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="../../login.html"><i
                                                class="material-icons">exit_to_app</i> Logout</a>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content pt-0">

                <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
                    <div class="mdk-drawer-layout__content page">

                        <div class="container-fluid page__heading-container">
                            <div class="page__heading">

                                <h1 class="m-0">Gestione sus citas</h1>
                            </div>
                        </div>

                        <div class="container-fluid page__container">
                            <div class="card card-form">
                                <div class="row no-gutters">


                                    <div class="col-lg-12 card-form__body">

                                        <div class="table-responsive border-bottom" data-toggle="lists"
                                            data-lists-values='["js-lists-values-employee-name"]'>

                                            <table class="table mb-0 thead-border-top-0">
                                                <thead>
                                                    <tr>

                                                        <th style="width: 18px;">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox"
                                                                    class="custom-control-input js-toggle-check-all"
                                                                    data-target="#staff" id="customCheckAll">
                                                                <label class="custom-control-label"
                                                                    for="customCheckAll"><span
                                                                        class="text-hide">Toggle all</span></label>
                                                            </div>
                                                        </th>

                                                        <th>Estilista</th>

                                                        <th style="width: 37px;">Estado</th>
                                                        <th style="width: 120px;">Fecha</th>
                                                        <th style="width: 51px;">Editar</th>
                                                        <th style="width: 24px;">Eliminar</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list" id="staff">

                                                    <tr class="selected">

                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox"
                                                                    class="custom-control-input js-check-selected-row"
                                                                    checked="" id="customCheck1_1">
                                                                <label class="custom-control-label"
                                                                    for="customCheck1_1"><span
                                                                        class="text-hide">Check</span></label>
                                                            </div>
                                                        </td>

                                                        <td>

                                                            <div class="media align-items-center">
                                                                <div class="avatar avatar-xs mr-2">
                                                                    <img src="../../assets/images/256_luke-porter-261779-unsplash.jpg"
                                                                        alt="Avatar"
                                                                        class="avatar-img rounded-circle">
                                                                </div>
                                                                <div class="media-body">

                                                                    <span class="js-lists-values-employee-name">Michael
                                                                        Smith</span>

                                                                </div>
                                                            </div>

                                                        </td>

                                                        <td><span class="badge badge-warning">Prendiente</span></td>
                                                        <td><small class="text-muted">12/2/2024</small></td>
                                                        <td><a href="" class="text-muted"><i
                                                                    class="material-icons">edit</i></a></td>
                                                        </td>
                                                        <td><a href="" class="text-muted"><i
                                                                    class="material-icons">delete</i></a></td>
                                                    </tr>


                                                    <tr>

                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox"
                                                                    class="custom-control-input js-check-selected-row"
                                                                    id="customCheck2_1">
                                                                <label class="custom-control-label"
                                                                    for="customCheck2_1"><span
                                                                        class="text-hide">Check</span></label>
                                                            </div>
                                                        </td>

                                                        <td>

                                                            <div class="media align-items-center">
                                                                <img src="../../assets/images/avatar/green.svg"
                                                                    class="mr-2" alt="avatar" />
                                                                <div class="media-body">

                                                                    <span class="js-lists-values-employee-name">Connie
                                                                        Smith</span>

                                                                </div>
                                                            </div>

                                                        </td>

                                                        <td><span class="badge badge-warning">Prendiente</span></td>
                                                        <td><small class="text-muted">2/2/2024</small></td>
                                                        <td><a href="" class="text-muted"><i
                                                                    class="material-icons">edit</i></a></td>
                                                        </td>
                                                        <td><a href="" class="text-muted"><i
                                                                    class="material-icons">delete</i></a></td>
                                                    </tr>

                                                    <tr>

                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox"
                                                                    class="custom-control-input js-check-selected-row"
                                                                    id="customCheck3_1">
                                                                <label class="custom-control-label"
                                                                    for="customCheck3_1"><span
                                                                        class="text-hide">Check</span></label>
                                                            </div>
                                                        </td>

                                                        <td>

                                                            <div class="media align-items-center">

                                                                <div class="avatar avatar-xs mr-2">
                                                                    <img src="../../assets/images/256_daniel-gaffey-1060698-unsplash.jpg"
                                                                        alt="Avatar"
                                                                        class="avatar-img rounded-circle">
                                                                </div>
                                                                <div class="media-body">

                                                                    <span class="js-lists-values-employee-name">John
                                                                        Connor</span>

                                                                </div>
                                                            </div>

                                                        </td>

                                                        <td><span class="badge badge-warning">Prendiente</span></td>
                                                        <td><small class="text-muted">1/1/2024</small></td>
                                                        <td><a href="" class="text-muted"><i
                                                                    class="material-icons">edit</i></a></td>
                                                        </td>
                                                        <td><a href="" class="text-muted"><i
                                                                    class="material-icons">delete</i></a></td>
                                                    </tr>

                                                    <tr class="selected">

                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox"
                                                                    class="custom-control-input js-check-selected-row"
                                                                    checked="" id="customCheck1_2">
                                                                <label class="custom-control-label"
                                                                    for="customCheck1_2"><span
                                                                        class="text-hide">Check</span></label>
                                                            </div>
                                                        </td>

                                                        <td>

                                                            <div class="media align-items-center">
                                                                <div class="avatar avatar-xs mr-2">
                                                                    <img src="../../assets/images/256_jeremy-banks-798787-unsplash.jpg"
                                                                        alt="Avatar"
                                                                        class="avatar-img rounded-circle">
                                                                </div>
                                                                <div class="media-body">

                                                                    <span
                                                                        class="js-lists-values-employee-name">Marco</span>

                                                                </div>
                                                            </div>

                                                        </td>

                                                        <td><span class="badge badge-warning">Prendiente</span></td>
                                                        <td><small class="text-muted">10/4/2024</small></td>
                                                        <td><a href="" class="text-muted"><i
                                                                    class="material-icons">edit</i></a></td>
                                                        </td>
                                                        <td><a href="" class="text-muted"><i
                                                                    class="material-icons">delete</i></a></td>
                                                    </tr>
                                                    <tr>

                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox"
                                                                    class="custom-control-input js-check-selected-row"
                                                                    id="customCheck2_2">
                                                                <label class="custom-control-label"
                                                                    for="customCheck2_2"><span
                                                                        class="text-hide">Check</span></label>
                                                            </div>
                                                        </td>

                                                        <td>

                                                            <div class="media align-items-center">
                                                                <img src="../../assets/images/avatar/green.svg"
                                                                    class="mr-2" alt="avatar" />
                                                                <div class="media-body">

                                                                    <span class="js-lists-values-employee-name">Carlos
                                                                        Salazar</span>

                                                                </div>
                                                            </div>

                                                        </td>

                                                        <td><span class="badge badge-warning">Prendiente</span></td>
                                                        <td><small class="text-muted">1/1/2024</small></td>
                                                        <td><a href="" class="text-muted"><i
                                                                    class="material-icons">edit</i></a></td>
                                                        </td>
                                                        <td><a href="" class="text-muted"><i
                                                                    class="material-icons">delete</i></a></td>
                                                    </tr>
                                                    <tr>

                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox"
                                                                    class="custom-control-input js-check-selected-row"
                                                                    id="customCheck3_2">
                                                                <label class="custom-control-label"
                                                                    for="customCheck3_2"><span
                                                                        class="text-hide">Check</span></label>
                                                            </div>
                                                        </td>

                                                        <td>

                                                            <div class="media align-items-center">

                                                                <div class="avatar avatar-xs mr-2">
                                                                    <img src="../../assets/images/256_joao-silas-636453-unsplash.jpg"
                                                                        alt="Avatar"
                                                                        class="avatar-img rounded-circle">

                                                                </div>
                                                                <div class="media-body">

                                                                    <span class="js-lists-values-employee-name">Juana
                                                                        Lopez</span>

                                                                </div>
                                                            </div>


                                                        </td>

                                                        <td><span class="badge badge-warning">Prendiente</span></td>
                                                        <td><small class="text-muted">4/1/2024</small></td>
                                                        <td><a href="" class="text-muted"><i
                                                                    class="material-icons">edit</i></a></td>
                                                        </td>
                                                        <td><a href="" class="text-muted"><i
                                                                    class="material-icons">delete</i></a></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>


                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary">Crear una cita</button>

                            </div>


                        </div>
                        <div class="container-fluid page__container">
                            <h1 class="m-0">Crear cita</h1>
                        </div>

                        <div class="card card-form">
                            <div class="row no-gutters">

                                <div class="col-lg-12 card-form__body card-body">

                                    <div class="form-group">

                                        <label for="validationSample01">Nombre del cliente</label>
                                        <input type="text" class="form-control" id="validationSample01"
                                            placeholder="Nombre " value="" required="">


                                    </div>
                                    <div class="form-group">
                                        <label for="select03">Servicios a agendar:</label>
                                        <select id="select03" data-toggle="select" multiple class="form-control">
                                            <option selected="">Peinados</option>
                                            <option selected="">Maquillaje</option>
                                            <option>Coloración</option>
                                            <option>Pedicure</option>
                                        </select>
                                    </div>
                                    <div class="form-group">

                                        <label for="select02">Estilistas diponibles</label>
                                        <select id="select02" data-toggle="select"
                                            data-minimum-results-for-search="-1" class="form-control">
                                            <option
                                                data-avatar-src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg">
                                                Adelle Sherley
                                            </option>
                                            <option data-avatar-src="assets/images/avatar/demi.png">
                                                Adrian Demian
                                            </option>
                                            <option data-avatar-src="assets/images/avatar/green.svg">
                                                Green Doe
                                            </option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="select04">Fechas disponibles</label>
                                        <select id="select04" data-toggle="select" multiple
                                            class="form-control form-control-lg">
                                            <option>12/2/24 8:30pm </option>
                                            <option>14/2/24 10:20am</option>
                                            <option>16/2/24 7:30pm</option>
                                            <option>18/2/24 6:00pm</option>


                                        </select>
                                    </div>

                                </div>

                            </div>
                            <button type="button" class="btn btn-primary">Agendar cita</button>

                        </div>


                    </div>

                    <!-- // END drawer-layout__content -->


                </div>
                <!-- // END drawer-layout -->

            </div>
            <!-- // END header-layout__content -->

        </div>
        <!-- // END header-layout -->

        {{-- <!-- App Settings FAB -->
        <div id="app-settings">
            <app-settings layout-active="default"
                :layout-location="{
                    'default': 'ui-tables.html',
                    'fixed': 'fixed-ui-tables.html',
                    'fluid': 'fluid-ui-tables.html',
                    'mini': 'mini-ui-tables.html'
                }"></app-settings>
        </div> --}}


        <!-- Bootstrap -->
        <script src="../../assets/vendor/popper.min.js"></script>
        <script src="../../assets/vendor/bootstrap.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script src="../../assets/vendor/perfect-scrollbar.min.js"></script>

        <!-- DOM Factory -->
        <script src="../../assets/vendor/dom-factory.js"></script>

        <!-- MDK -->
        <script src="../../assets/vendor/material-design-kit.js"></script>

        <!-- App -->
        <script src="../../assets/js/toggle-check-all.js"></script>
        <script src="../../assets/js/check-selected-row.js"></script>
        <script src="../../assets/js/dropdown.js"></script>
        <script src="../../assets/js/sidebar-mini.js"></script>
        <script src="../../assets/js/app.js"></script>

        <!-- App Settings (safe to remove) -->
        <script src="../../assets/js/app-settings.js"></script>

        <!-- List.js -->
        <script src="../../assets/vendor/list.min.js"></script>
        <script src="../../assets/js/list.js"></script>

        <!-- Flatpickr -->
        <script src="../../assets/vendor/flatpickr/flatpickr.min.js"></script>
        <script src="../../assets/js/flatpickr.js"></script>

        <!-- jQuery Mask Plugin -->
        <script src="../../assets/vendor/jquery.mask.min.js"></script>

        <!-- Quill -->
        <script src="../../assets/vendor/quill.min.js"></script>
        <script src="../../assets/js/quill.js"></script>

        <!-- Dropzone -->
        <script src="../../assets/vendor/dropzone.min.js"></script>
        <script src="../../assets/js/dropzone.js"></script>

        <!-- Select2 -->
        <script src="../../assets/vendor/select2/select2.min.js"></script>
        <script src="../../assets/js/select2.js"></script>

    </body>

    </html>
</x-public-layout>
