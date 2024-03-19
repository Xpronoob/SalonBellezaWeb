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

@include('modals.global')

@include('layouts.mainHeader')

<div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
    <!-- CONTENT VIEW -->
    <div class="mdk-drawer-layout__content page">

        <div class="mt-2"></div>
        <div class="container-fluid page__container">
            {{ $slot }} <!-- VISTA -->
        </div>

    </div>
    <!-- END CONTENT VIEW -->
    <!-- // END drawer-layout__content -->

    <div class="mdk-drawer
            js-mdk-drawer" id="default-drawer" data-align="start">
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

{{-- <script>
    {!! Vite::content('resources/js/app.js') !!}
</script> --}}

<script src="{{ asset('assets/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendor/perfect-scrollbar.min.js') }}"></script>

<script src="{{ asset('assets/vendor/dom-factory.js') }}"></script>

<script src="{{ asset('assets/vendor/material-design-kit.js') }}"></script>

<script src="{{ asset('assets/js/toggle-check-all.js') }}"></script>
<script src="{{ asset('assets/js/check-selected-row.js') }}"></script>
<script src="{{ asset('assets/js/dropdown.js') }}"></script>
<script src="{{ asset('assets/js/sidebar-mini.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('assets/js/app-settings.js') }}"></script>

<script src="{{ asset('assets/vendor/toastr.min.js') }}"></script>
<script src="{{ asset('assets/js/toastr.js') }}"></script>

<script src="{{ asset('assets/vendor/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/js/flatpickr.js') }}"></script>

<script src="{{ asset('assets/js/settings.js') }}"></script>

<script src="{{ asset('assets/vendor/moment.min.js') }}"></script>
<script src="{{ asset('assets/vendor/moment-range.js') }}"></script>

<script src="{{ asset('assets/vendor/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jqvmap/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('assets/js/vector-maps.js') }}"></script>

{{-- <!-- Chart.js -->
<script src="{{ asset('assets/vendor/Chart.min.js') }}"></script>

<!-- App Charts JS -->
<script src="{{ asset('assets/js/charts.js') }}"></script>
<script src="{{ asset('assets/js/chartjs-rounded-bar.js') }}"></script>

<!-- Chart Samples -->
<script src="{{ asset('assets/js/page.dashboard.js') }}"></script>
<script src="{{ asset('assets/js/progress-charts.js') }}"></script> --}}

</body>

</html>
