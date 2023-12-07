<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Inventario</title>

        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots"
              content="noindex">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="../../assets/vendor/perfect-scrollbar.css"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="../../assets/css/app.css"
              rel="stylesheet">
        <link type="text/css"
              href="../../assets/css/app.rtl.css"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="../../assets/css/vendor-material-icons.css"
              rel="stylesheet">
        <link type="text/css"
              href="../../assets/css/vendor-material-icons.rtl.css"
              rel="stylesheet">

        <!-- Font Awesome FREE Icons -->
        <link type="text/css"
              href="../../assets/css/vendor-fontawesome-free.css"
              rel="stylesheet">
        <link type="text/css"
              href="../../assets/css/vendor-fontawesome-free.rtl.css"
              rel="stylesheet">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async
                src="https://www.googletagmanager.com/gtag/js?id=UA-133433427-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-133433427-1');
        </script>

    </head>

    <body class="layout-default">

        <div class="preloader"></div>

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->

            <div id="header"
                 class="mdk-header js-mdk-header m-0"
                 data-fixed>
                <div class="mdk-header__content">

                    <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-dark  pr-0"
                         id="navbar"
                         data-primary>
                        <div class="container-fluid p-0">

                            <!-- Navbar toggler -->

                            <button class="navbar-toggler navbar-toggler-right d-block d-lg-none"
                                    type="button"
                                    data-toggle="sidebar">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <!-- Navbar Brand -->
                            <a href="../../index.html"
                               class="navbar-brand ">

                                <svg class="mr-2"
                                     xmlns="http://www.w3.org/2000/svg"
                                     fill="currentColor"
                                     style="width:20px;"
                                     viewBox="0 0 40 40">
                                    <path d="M40 34.16666667c.01-3.21166667-2.58333333-5.82333334-5.795-5.835-1.94-.00666667-3.75666667.955-4.84166667 2.565-.10166666.155-.295.22333333-.47166666.16666666L11.94 25.66666667c-.19-.06-.31-.245-.28833333-.44333334.01-.07333333.015-.14833333.015-.22333333 0-.06833333-.005-.13833333-.01333334-.20666667-.02166666-.20166666.105-.39.3-.44666666l17.96-5.13c.13833334-.04.28666667-.005.39333334.09166666 1.05.97333334 2.42833333 1.51666667 3.86 1.525C37.38833333 20.83333333 40 18.22166667 40 15s-2.61166667-5.83333333-5.83333333-5.83333333C32.52 9.17166667 30.95333333 9.87833333 29.86 11.11c-.11.12166667-.28.16833333-.43666667.11833333L11.91 5.65333333c-.16-.05-.27333333-.19166666-.28833333-.35833333-.30333334-3.20166667-3.14333334-5.55166667-6.345-5.24833333S-.275 3.19.02833333 6.39166667c.28166667 2.99333333 2.79833334 5.28 5.805 5.275 1.64666667-.005 3.21333334-.71333334 4.30666667-1.945.11-.12166667.28-.16833334.43666667-.11833334l16.57 5.27166667c.22.06833333.34166666.30333333.27166666.52333333-.04166666.13333334-.14833333.23833334-.28333333.275L9.90333333 20.59666667c-.13333333.03833333-.275.00833333-.38166666-.08-1.03333334-.86833334-2.33833334-1.34666667-3.68833334-1.35C2.61166667 19.16666667 0 21.77833333 0 25s2.61166667 5.83333333 5.83333333 5.83333333c1.355-.005 2.665-.485 3.7-1.35833333.10833334-.09166667.25833334-.12.39333334-.07666667l18.29 5.81833334c.14.04333333.24666666.15666666.28.3.75666666 3.13166666 3.90833333 5.05666666 7.04 4.3C38.14833333 39.185 39.99 36.85333333 40 34.16666667z" />
                                </svg>

                                <span>flowdash</span>
                            </a>

                            <form class="search-form d-none d-sm-flex flex"
                                  action="../../index.html">
                                <button class="btn"
                                        type="submit"><i class="material-icons">search</i></button>
                                <input type="text"
                                       class="form-control"
                                       placeholder="Search">
                            </form>

                            <ul class="nav navbar-nav ml-auto d-none d-md-flex">
                                <li class="nav-item dropdown">
                                    <a href="#notifications_menu"
                                       class="nav-link dropdown-toggle"
                                       data-toggle="dropdown"
                                       data-caret="false">
                                        <i class="material-icons nav-icon navbar-notifications-indicator">notifications</i>
                                    </a>
                                    <div id="notifications_menu"
                                         class="dropdown-menu dropdown-menu-right navbar-notifications-menu">
                                        <div class="dropdown-item d-flex align-items-center py-2">
                                            <span class="flex navbar-notifications-menu__title m-0">Notifications</span>
                                            <a href="javascript:void(0)"
                                               class="text-muted"><small>Clear all</small></a>
                                        </div>
                                        <div class="navbar-notifications-menu__content"
                                             data-perfect-scrollbar>
                                            <div class="py-2">

                                                <div class="dropdown-item d-flex">
                                                    <div class="mr-3">
                                                        <div class="avatar avatar-sm"
                                                             style="width: 32px; height: 32px;">
                                                            <img src="../../assets/images/256_daniel-gaffey-1060698-unsplash.jpg"
                                                                 alt="Avatar"
                                                                 class="avatar-img rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex">
                                                        <a href="">A.Demian</a> left a comment on <a href="">FlowDash</a><br>
                                                        <small class="text-muted">1 minute ago</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item d-flex">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <div class="avatar avatar-xs"
                                                                 style="width: 32px; height: 32px;">
                                                                <span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
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
                                                        <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                        <div>Hey, how are you? What about our next meeting</div>
                                                        <small class="text-muted">2 minutes ago</small>
                                                    </div>
                                                </div>

                                                <div class="dropdown-item d-flex">
                                                    <div class="mr-3">
                                                        <div class="avatar avatar-sm"
                                                             style="width: 32px; height: 32px;">
                                                            <img src="../../assets/images/256_daniel-gaffey-1060698-unsplash.jpg"
                                                                 alt="Avatar"
                                                                 class="avatar-img rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex">
                                                        <a href="">A.Demian</a> left a comment on <a href="">FlowDash</a><br>
                                                        <small class="text-muted">1 minute ago</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item d-flex">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <div class="avatar avatar-xs"
                                                                 style="width: 32px; height: 32px;">
                                                                <span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
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
                                                        <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                        <div>Hey, how are you? What about our next meeting</div>
                                                        <small class="text-muted">2 minutes ago</small>
                                                    </div>
                                                </div>

                                                <div class="dropdown-item d-flex">
                                                    <div class="mr-3">
                                                        <div class="avatar avatar-sm"
                                                             style="width: 32px; height: 32px;">
                                                            <img src="../../assets/images/256_daniel-gaffey-1060698-unsplash.jpg"
                                                                 alt="Avatar"
                                                                 class="avatar-img rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="flex">
                                                        <a href="">A.Demian</a> left a comment on <a href="">FlowDash</a><br>
                                                        <small class="text-muted">1 minute ago</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-item d-flex">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <div class="avatar avatar-xs"
                                                                 style="width: 32px; height: 32px;">
                                                                <span class="avatar-title bg-purple rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
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
                                                        <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                        <div>Hey, how are you? What about our next meeting</div>
                                                        <small class="text-muted">2 minutes ago</small>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <a href="javascript:void(0);"
                                           class="dropdown-item text-center navbar-notifications-menu__footer">View All</a>
                                    </div>
                                </li>
                            </ul>

                            <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
                                <li class="nav-item dropdown">
                                    <a href="#account_menu"
                                       class="nav-link dropdown-toggle"
                                       data-toggle="dropdown"
                                       data-caret="false">
                                        <span class="mr-1 d-flex-inline">
                                            <span class="text-light">Adrian D.</span>
                                        </span>
                                        <img src="../../assets/images/avatar/demi.png"
                                             class="rounded-circle"
                                             width="32"
                                             alt="Frontted">
                                    </a>
                                    <div id="account_menu"
                                         class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-item-text dropdown-item-text--lh">
                                            <div><strong>Adrian Demian</strong></div>
                                            <div class="text-muted">@adriandemian</div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item"
                                           href="../../index.html"><i class="material-icons">dvr</i> Dashboard</a>
                                        <a class="dropdown-item"
                                           href="../../profile.html"><i class="material-icons">account_circle</i> My profile</a>
                                        <a class="dropdown-item"
                                           href="../../edit-account.html"><i class="material-icons">edit</i> Edit account</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item"
                                           href="../../login.html"><i class="material-icons">exit_to_app</i> Logout</a>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content">

                <div class="mdk-drawer-layout js-mdk-drawer-layout"
                     data-push
                     data-responsive-width="992px">
                    <div class="mdk-drawer-layout__content page">

                        <div class="container-fluid page__heading-container">
                            <div class="page__heading">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                                        <li class="breadcrumb-item">UI Components</li>
                                        <li class="breadcrumb-item active"
                                            aria-current="page">Inventario</li>
                                    </ol>
                                </nav>

                                <h1 class="m-0">Inventario</h1>
                            </div>
                        </div>

                        <div class="container-fluid page__container">
                          

                            <div class="card card-form">
                                <div class="row no-gutters">
                                  
                                    <div class="col-lg-12 card-form__body">

                                        <div class="table-responsive border-bottom"
                                             data-toggle="lists"
                                             data-lists-values='["js-lists-values-employee-name"]'>
                                            
                                            <div class="search-form search-form--light m-3">
                                                <input type="text"
                                                       class="form-control search"
                                                       placeholder="Search">
                                                <button class="btn"
                                                        type="button"><i class="material-icons">buscar</i></button>
                                            </div>

                                            <table class="table mb-0 thead-border-top-0">
                                                <thead>
                                                    <tr>

                                                        <th style="width: 37px;">Insumos</th>
                                                        <th style="width: 37px;">Estado</th>
                                                        <th style="width: 37px;">Descripción</th>
                                                        <th style="width: 37px;">Categoria</th>
                                                        <th style="width: 37px;">Cantidad</th>
                                                        <th style="width: 37px;">Proveedor</th>
                                                        <th style="width: 37px;">Precio compra</th>
                                                        <th style="width: 37px;">Precio venta</th>
                                                        <th style="width: 51px;">Editar</th>
                                                        <th style="width: 24px;">Eliminar</th>

                                                    </tr>
                                                </thead>
                                                <tbody class="list"
                                                       id="staff02">

                                                    <tr>

                                                        <td> <span class="js-lists-values-employee-name">Tintes Fantasias</span></td>

                                                        <td><span class="badge badge-warning">Bajo stock</span></td>
                                                        <td><small class="js-lists-values-employee-name">Tinte Morado</small></td>
                                
                                                        <td> <span class="js-lists-values-employee-name">Tintes</span></td>
                                                        <td> <span class="js-lists-values-employee-name">8</span></td>
                                                        <td> <span class="js-lists-values-employee-name">Colors</span></td>
                                                        <td>¢2500</td>
                                                        <td>¢6000</td>
                                                        <td><a href=""
                                                            class="text-muted"><i class="material-icons">edit</i></a></td> </td>
                                                        <td><a href=""
                                                               class="text-muted"><i class="material-icons">delete</i></a></td>
                                                    </tr>

                                                    <tr>
                                                        <td> <span class="js-lists-values-employee-name">Agua oxigenada</span></td>

                                                        <td><span class="badge badge-success">Suficiente stock</span></td>
                                                        <td><small class="js-lists-values-employee-name">Agua oxigenada de 30ml</small></td>
                                
                                                        <td> <span class="js-lists-values-employee-name">Insumos</span></td>
                                                        <td> <span class="js-lists-values-employee-name">100</span></td>
                                                        <td> <span class="js-lists-values-employee-name">SGDLT</span></td>
                                                        <td>¢1500</td>
                                                        <td>¢4000</td>
                                                        <td><a href=""
                                                            class="text-muted"><i class="material-icons">edit</i></a></td> </td>
                                                        <td><a href=""
                                                               class="text-muted"><i class="material-icons">delete</i></a></td>
                                                     </tr>

                                                    <tr>

                                                        <td> <span class="js-lists-values-employee-name">Tintes Rubio P</span></td>

                                                        <td><span class="badge badge-warning">Bajo stock</span></td>
                                                        <td><small class="js-lists-values-employee-name">Tinte Rubio permanente</small></td>
                                
                                                        <td> <span class="js-lists-values-employee-name">Tintes</span></td>
                                                        <td> <span class="js-lists-values-employee-name">8</span></td>
                                                        <td> <span class="js-lists-values-employee-name">KeraColor</span></td>
                                                        <td>¢3900</td>
                                                        <td>¢6500</td>
                                                        <td><a href=""
                                                            class="text-muted"><i class="material-icons">edit</i></a></td> </td>
                                                        <td><a href=""
                                                               class="text-muted"><i class="material-icons">delete</i></a></td>
                                                     </tr>

                                                   
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            
                        </div>
                        

                    </div>
                    <!-- // END drawer-layout__content -->

                    <div class="mdk-drawer  js-mdk-drawer"
                         id="default-drawer"
                         data-align="start">
                        <div class="mdk-drawer__content">
                            <div class="sidebar sidebar-light sidebar-left sidebar-p-t"
                                 data-perfect-scrollbar>
                                <div class="sidebar-heading">Menu</div>
                                <ul class="sidebar-menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           data-toggle="collapse"
                                           href="#dashboards_menu">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                                            <span class="sidebar-menu-text">Dashboards</span>
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu collapse"
                                            id="dashboards_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="../../index.html">
                                                    <span class="sidebar-menu-text">Default</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="../../analytics.html">
                                                    <span class="sidebar-menu-text">Analytics</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="../../staff.html">
                                                    <span class="sidebar-menu-text">Staff</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="../../ecommerce.html">
                                                    <span class="sidebar-menu-text">E-commerce</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="../../dashboard-quick-access.html">
                                                    <span class="sidebar-menu-text">Quick Access</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           data-toggle="collapse"
                                           href="#apps_menu">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                                            <span class="sidebar-menu-text">Apps</span>
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu collapse"
                                            id="apps_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="../../app-activities.html">
                                                    <span class="sidebar-menu-text">Activities</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="../../app-trello.html">
                                                    <span class="sidebar-menu-text">Trello</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="../../app-projects.html">
                                                    <span class="sidebar-menu-text">Projects</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="../../app-fullcalendar.html">
                                                    <span class="sidebar-menu-text">Event Calendar</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="../../app-chat.html">
                                                    <span class="sidebar-menu-text">Chat</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="../../app-email.html">
                                                    <span class="sidebar-menu-text">Email</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item ">
                                                <a class="sidebar-menu-button"
                                                   data-toggle="collapse"
                                                   href="#course_menu">
                                                    <span class="sidebar-menu-text">Education</span>
                                                    <span class="ml-auto d-flex align-items-center">
                                                        <span class="badge badge-primary">NEW</span>
                                                        <span class="sidebar-menu-toggle-icon"></span>
                                                    </span>
                                                </a>
                                                <ul class="sidebar-submenu collapse "
                                                    id="course_menu">
                                                    <li class="sidebar-menu-item ">
                                                        <a class="sidebar-menu-button"
                                                           href="../../app-browse-courses.html">
                                                            <span class="sidebar-menu-text">Browse Courses</span>
                                                        </a>
                                                    </li>
                                                    <li class="sidebar-menu-item ">
                                                        <a class="sidebar-menu-button"
                                                           href="../../app-course.html">
                                                            <span class="sidebar-menu-text">Course</span>
                                                        </a>
                                                    </li>
                                                    <li class="sidebar-menu-item ">
                                                        <a class="sidebar-menu-button"
                                                           href="../../app-lesson.html">
                                                            <span class="sidebar-menu-text">Lesson</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           data-toggle="collapse"
                                           href="#pages_menu">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>
                                            <span class="sidebar-menu-text">Pages</span>
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu collapse"
                                            id="pages_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="../../companies.html">
                                                    <span class="sidebar-menu-text">Companies</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="../../stories.html">
                                                    <span class="sidebar-menu-text">Stories</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="../../discussions.html">
                                                    <span class="sidebar-menu-text">Discussions</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="../../invoice.html">
                                                    <span class="sidebar-menu-text">Invoice</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="../../pricing.html">
                                                    <span class="sidebar-menu-text">Pricing</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="../../edit-account.html">
                                                    <span class="sidebar-menu-text">Edit Account</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="../../profile.html">
                                                    <span class="sidebar-menu-text">User Profile</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="../../payout.html">
                                                    <span class="sidebar-menu-text">Payout</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="../../digital-product.html">
                                                    <span class="sidebar-menu-text">Digital Product</span>
                                                    <span class="badge badge-primary ml-auto">NEW</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   data-toggle="collapse"
                                                   href="#login_menu">
                                                    <span class="sidebar-menu-text">Login</span>
                                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                                </a>
                                                <ul class="sidebar-submenu collapse"
                                                    id="login_menu">
                                                    <li class="sidebar-menu-item">
                                                        <a class="sidebar-menu-button"
                                                           href="../../login.html">
                                                            <span class="sidebar-menu-text">Login / Background Image</span>
                                                        </a>
                                                    </li>
                                                    <li class="sidebar-menu-item">
                                                        <a class="sidebar-menu-button"
                                                           href="../../login-centered-boxed.html">
                                                            <span class="sidebar-menu-text">Login / Centered Boxed</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   data-toggle="collapse"
                                                   href="#signup_menu">
                                                    <span class="sidebar-menu-text">Sign Up</span>
                                                    <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                                </a>
                                                <ul class="sidebar-submenu collapse"
                                                    id="signup_menu">
                                                    <li class="sidebar-menu-item">
                                                        <a class="sidebar-menu-button"
                                                           href="../../signup.html">
                                                            <span class="sidebar-menu-text">Sign Up / Background Image</span>
                                                        </a>
                                                    </li>
                                                    <li class="sidebar-menu-item">
                                                        <a class="sidebar-menu-button"
                                                           href="../../signup-centered-boxed.html">
                                                            <span class="sidebar-menu-text">Sign Up / Centered Boxed</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="../../product-listing.html">
                                                    <span class="sidebar-menu-text">Product Listing</span>
                                                    <span class="badge badge-primary ml-auto">NEW</span>
                                                </a>
                                            </li>

                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="../../blank.html">
                                                    <span class="sidebar-menu-text">Blank Page</span>
                                                    <span class="badge badge-primary ml-auto">NEW</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           data-toggle="collapse"
                                           href="#layouts_menu">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">view_compact</i>
                                            <span class="sidebar-menu-text">Layouts</span>
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu collapse"
                                            id="layouts_menu">
                                            <li class="sidebar-menu-item active">
                                                <a class="sidebar-menu-button"
                                                   href="../../ui-tables.html">
                                                    <span class="sidebar-menu-text">Default</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="../../fluid-ui-tables.html">
                                                    <span class="sidebar-menu-text">Full Width Navs</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="../../fixed-ui-tables.html">
                                                    <span class="sidebar-menu-text">Fixed Navs</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button"
                                                   href="../../mini-ui-tables.html">
                                                    <span class="sidebar-menu-text">Mini Sidebar + Navs</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="sidebar-heading">Components</div>
                                <div class="sidebar-block p-0 mb-0">
                                    <ul class="sidebar-menu"
                                        id="components_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="../../ui-buttons.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">mouse</i>
                                                <span class="sidebar-menu-text">Buttons</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="../../ui-alerts.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">notifications</i>
                                                <span class="sidebar-menu-text">Alerts</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="../../ui-avatars.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person</i>
                                                <span class="sidebar-menu-text">Avatars</span>
                                                <span class="badge badge-primary ml-auto">NEW</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="../../ui-modals.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">aspect_ratio</i>
                                                <span class="sidebar-menu-text">Modals</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="../../ui-charts.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">pie_chart_outlined</i>
                                                <span class="sidebar-menu-text">Charts</span>
                                                <span class="badge badge-warning ml-auto">PRO</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="../../ui-icons.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">brush</i>
                                                <span class="sidebar-menu-text">Icons</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="../../ui-forms.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">text_format</i>
                                                <span class="sidebar-menu-text">Forms</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="../../ui-range-sliders.html">
                                                <!-- tune or low_priority or linear_scale or space_bar or swap_calls -->
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tune</i>
                                                <span class="sidebar-menu-text">Range Sliders</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="../../ui-datetime.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">event_available</i>
                                                <span class="sidebar-menu-text">Time &amp; Date</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item active">
                                            <a class="sidebar-menu-button"
                                               href="../../ui-tables.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dns</i>
                                                <span class="sidebar-menu-text">Inventario</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="../../ui-tabs.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tab</i>
                                                <span class="sidebar-menu-text">Tabs</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="../../ui-loaders.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">refresh</i>
                                                <span class="sidebar-menu-text">Loaders</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="../../ui-drag.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">control_point</i>
                                                <span class="sidebar-menu-text">Drag &amp; Drop</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="../../ui-pagination.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">last_page</i>
                                                <span class="sidebar-menu-text">Pagination</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button"
                                               href="../../ui-vector-maps.html">
                                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">location_on</i>
                                                <span class="sidebar-menu-text">Vector Maps</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="sidebar-p-a sidebar-b-y">
                                        <div class="d-flex align-items-top mb-2">
                                            <div class="sidebar-heading m-0 p-0 flex text-body js-text-body">Progress</div>
                                            <div class="font-weight-bold text-success">60%</div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success"
                                                 role="progressbar"
                                                 style="width: 60%"
                                                 aria-valuenow="60"
                                                 aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center sidebar-p-a border-bottom sidebar-account">
                                    <a href="../../profile.html"
                                       class="flex d-flex align-items-center text-underline-0 text-body">
                                        <span class="avatar avatar-sm mr-2">
                                            <img src="../../assets/images/avatar/demi.png"
                                                 alt="avatar"
                                                 class="avatar-img rounded-circle">
                                        </span>
                                        <span class="flex d-flex flex-column">
                                            <strong>Adrian Demian</strong>
                                            <small class="text-muted text-uppercase">Site Manager</small>
                                        </span>
                                    </a>
                                    <div class="dropdown ml-auto">
                                        <a href="#"
                                           data-toggle="dropdown"
                                           data-caret="false"
                                           class="text-muted"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-item-text dropdown-item-text--lh">
                                                <div><strong>Adrian Demian</strong></div>
                                                <div>@adriandemian</div>
                                            </div>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item"
                                               href="../../index.html">Dashboard</a>
                                            <a class="dropdown-item"
                                               href="../../profile.html">My profile</a>
                                            <a class="dropdown-item"
                                               href="../../edit-account.html">Edit account</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item"
                                               href="../../login.html">Logout</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="sidebar-p-a">
                                    <a href="https://themeforest.net/item/stack-admin-bootstrap-4-dashboard-template/22959011"
                                       class="btn btn-primary btn-block">Purchase &dollar;35</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- // END drawer-layout -->

            </div>
            <!-- // END header-layout__content -->

        </div>
        <!-- // END header-layout -->

        <!-- App Settings FAB -->
        <div id="app-settings">
            <app-settings layout-active="default"
                          :layout-location="{
      'default': 'ui-tables.html',
      'fixed': 'fixed-ui-tables.html',
      'fluid': 'fluid-ui-tables.html',
      'mini': 'mini-ui-tables.html'
    }"></app-settings>
        </div>

        <!-- jQuery -->
        <script src="../../assets/vendor/jquery.min.js"></script>

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

    </body>

</html>