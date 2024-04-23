<div class="sidebar sidebar-light sidebar-left sidebar-p-t navbar-expand-md" data-perfect-scrollbar>
    <div class="sidebar-heading">Menú</div>
    <ul class="sidebar-menu">
        <li class="sidebar-menu-item {{ Request::is('administration*') ? 'active open' : '' }}">
            <a class="sidebar-menu-button" data-toggle="collapse" href="#dashboards_menu">
                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                <span class="sidebar-menu-text">Administración</span>
                <span class="ml-auto sidebar-menu-toggle-icon"></span>
            </a>
            <ul class="sidebar-submenu collapse {{ Request::is('admin*') ? 'show' : '' }}" id="dashboards_menu">
                {{-- <li class="sidebar-menu-item {{ Request::is('admin/usuarios*') ? 'active' : '' }}">
                    <a class="sidebar-menu-button" href="">
                        <span class="sidebar-menu-text">Usuarios</span>
                    </a>
                </li>
                <li class="sidebar-menu-item {{ Request::is('admin/roles*') ? 'active' : '' }}">
                    <a class="sidebar-menu-button" href="">
                        <span class="sidebar-menu-text">Roles</span>
                    </a>
                </li>
                <li class="sidebar-menu-item {{ Request::is('admin/acciones*') ? 'active' : '' }}">
                    <a class="sidebar-menu-button" href="">
                        <span class="sidebar-menu-text">Acciones</span>
                    </a>
                </li> --}}
                <li class="sidebar-menu-item {{ Request::is('admin/administracion*') ? 'active' : '' }}">
                    <a class="sidebar-menu-button" href="{{ route('admin.errors.index') }}">
                        <span class="sidebar-menu-text">Errores</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="sidebar-menu-item {{ Request::is('admin/inventario*') ? 'active open' : '' }}">
            <a class="sidebar-menu-button" data-toggle="collapse" href="#apps_menu">

                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">store</i>

                <span class="sidebar-menu-text">Inventario</span>
                <span class="ml-auto sidebar-menu-toggle-icon"></span>
            </a>
            <ul class="sidebar-submenu collapse {{ Request::is('admin/inventario*') ? 'show' : '' }}" id="apps_menu">
                <li class="sidebar-menu-item {{ Request::is('admin/inventario/productos*') ? 'active' : '' }}">
                    <a class="sidebar-menu-button" href="{{ route('productos.index') }}">
                        <span class="sidebar-menu-text">Productos</span>
                    </a>
                </li>
                <li class="sidebar-menu-item {{ Request::is('admin/inventario/categorias*') ? 'active' : '' }}">
                    <a class="sidebar-menu-button" href="{{ route('categorias.index') }}">
                        <span class="sidebar-menu-text">Categorías</span>
                    </a>
                </li>
                <li class="sidebar-menu-item {{ Request::is('admin/inventario/proveedores*') ? 'active' : '' }}">
                    <a class="sidebar-menu-button" href="{{ route('proveedores.index') }}">
                        <span class="sidebar-menu-text">Proveedores</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="sidebar-menu-item {{ Request::is('admin/gestion*') ? 'active open' : '' }}">
            <a class="sidebar-menu-button" data-toggle="collapse" href="#pages_menu">


                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i>

                <span class="sidebar-menu-text">Gestión</span>

                <span class="ml-auto sidebar-menu-toggle-icon"></span>
            </a>
            <ul class="sidebar-submenu collapse {{ Request::is('admin/gestion*') ? 'show' : '' }}" id="pages_menu">
                <li class="sidebar-menu-item {{ Request::is('admin/gestion/citas*') ? 'active' : '' }}">
                    <a class="sidebar-menu-button" href="{{ route('citas.index') }}">
                        <span class="sidebar-menu-text">Citas</span>
                    </a>
                </li>
                <li class="sidebar-menu-item {{ Request::is('admin/gestion/servicios*') ? 'active' : '' }}">
                    <a class="sidebar-menu-button" href="{{ route('servicios.index') }}">
                        <span class="sidebar-menu-text">Servicios</span>
                    </a>
                </li>
                <li class="sidebar-menu-item {{ Request::is('admin/gestion/contabilidad*') ? 'active' : '' }}">
                    <a class="sidebar-menu-button" href="{{ route('contabilidad.index') }}">
                        <span class="sidebar-menu-text">Contabilidad</span>
                    </a>
                </li>
                <li class="sidebar-menu-item {{ Request::is('admin/gestion/vistaCalculadora') ? 'active' : '' }}">
                    <a class="sidebar-menu-button" href="{{ route('calculadora.index') }}">
                        <span class="sidebar-menu-text">Calculadora de beneficios</span>
                    </a>
                </li>
            </ul>
        </li>





        {{-- <!-- Otros elementos del menú -->

    </ul>
    <div class="sidebar-heading">Otros</div>
    <div class="sidebar-block p-0 mb-0">
        <ul class="sidebar-menu" id="components_menu">
            <li class="sidebar-menu-item {{ Request::is('contabilidad*') ? 'active' : '' }}">
                <a class="sidebar-menu-button" href="{{ route('contabilidad.index') }}">
                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">mouse</i>
                    <span class="sidebar-menu-text">Contabilidad</span>
                </a>
            </li>
        </ul>
    </div>
</div> --}}
