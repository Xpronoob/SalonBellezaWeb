@vite(['resources/css/empty.css'])

@include('layouts.mainHeader')

<div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
    <!-- CONTENT VIEW -->
    <div class="mdk-drawer-layout__content page">

        <div class="container-fluid page__heading-container">
            <div class="page__heading d-flex align-items-center">
                <div class="flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a>
                            </li>
                            <li class="breadcrumb-item">Blank</li>
                            <li class="breadcrumb-item active" aria-current="page">Page</li>
                        </ol>
                    </nav>
                    <h1 class="m-0">Blank Page</h1>
                </div>

                <a href="" class="btn btn-success ml-1">Action</a>
            </div>
        </div>

        <div class="container-fluid page__container">
            // Content
            {{ $slot }} <!-- VISTA -->
        </div>

    </div>
    <!-- END CONTENT VIEW -->
    <!-- // END drawer-layout__content -->

    <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
        <div class="mdk-drawer__content">
            @include('layouts.mainNavbar')
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
            'default': 'index.html',
            'fixed': 'fixed-dashboard.html',
            'fluid': 'fluid-dashboard.html',
            'mini': 'mini-dashboard.html'
        }"></app-settings>
</div>

<!-- jQuery -->
<script src="{{ asset('assets/vendor/jquery.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('assets/vendor/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap.min.js') }}"></script>

<!-- Perfect Scrollbar -->
<script src="{{ asset('assets/vendor/perfect-scrollbar.min.js') }}"></script>

<!-- DOM Factory -->
<script src="{{ asset('assets/vendor/dom-factory.js') }}"></script>

<!-- MDK -->
<script src="{{ asset('assets/vendor/material-design-kit.js') }}"></script>

<!-- App -->
<script src="{{ asset('assets/js/toggle-check-all.js') }}"></script>
<script src="{{ asset('assets/js/check-selected-row.js') }}"></script>
<script src="{{ asset('assets/js/dropdown.js') }}"></script>
<script src="{{ asset('assets/js/sidebar-mini.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

<!-- App Settings (safe to remove) -->
<script src="{{ asset('assets/js/app-settings.js') }}"></script>

<!-- Flatpickr -->
<script src="{{ asset('assets/vendor/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/js/flatpickr.js') }}"></script>

<!-- Global Settings -->
<script src="{{ asset('assets/js/settings.js') }}"></script>

<!-- Moment.js -->
<script src="{{ asset('assets/vendor/moment.min.js') }}"></script>
<script src="{{ asset('assets/vendor/moment-range.js') }}"></script>

<!-- Chart.js -->
<script src="{{ asset('assets/vendor/Chart.min.js') }}"></script>

<!-- App Charts JS -->
<script src="{{ asset('assets/js/charts.js') }}"></script>
<script src="{{ asset('assets/js/chartjs-rounded-bar.js') }}"></script>

<!-- Chart Samples -->
<script src="{{ asset('assets/js/page.dashboard.js') }}"></script>
<script src="{{ asset('assets/js/progress-charts.js') }}"></script>

<!-- Vector Maps -->
<script src="{{ asset('assets/vendor/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jqvmap/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('assets/js/vector-maps.js') }}"></script>


</body>

</html>
