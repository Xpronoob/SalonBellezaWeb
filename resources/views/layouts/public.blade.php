<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    <link rel="stylesheet" href="{{ asset('build/assets/app-9c5f9671.css') }}">
    <script src="{{ asset('build/assets/app-b1941ff8.js') }}"></script>

    <!-- Prevent the demo from appearing in search engines -->
    {{-- <meta name="robots" content="noindex" /> --}}

    {{-- <!-- Perfect Scrollbar -->
    <link type="text/css" href="{{ asset('assets/vendor/perfect-scrollbar.css') }}" rel="stylesheet" />

    <!-- App CSS -->
    <link type="text/css" href="{{ asset('assets/css/app.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('assets/css/app.rtl.css') }}" rel="stylesheet" />

    <!-- Material Design Icons -->
    <link type="text/css" href="{{ asset('assets/css/vendor-material-icons.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('assets/css/vendor-material-icons.rtl.css') }}" rel="stylesheet" />


    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="{{ asset('assets/css/vendor-fontawesome-free.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('assets/css/vendor-fontawesome-free.rtl.css') }}" rel="stylesheet" /> --}}

    {{-- <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133433427-1"></script>
    <script>
        window.dataLayer = window.dataLayer || []

        function gtag() {
            dataLayer.push(arguments)
        }
        gtag('js', new Date())
        gtag('config', 'UA-133433427-1')
    </script> --}}

    <!-- Scripts -->
    @vite(['resources/assets/vendor/perfect-scrollbar.css', 'resources/assets/css/app.css', 'resources/assets/css/vendor-material-icons.css', 'resources/assets/css/vendor-fontawesome-free.css', 'resources/assets/vendor/jquery.min.js', 'resources/assets/vendor/popper.min.js', 'resources/assets/vendor/bootstrap.min.js', 'resources/assets/vendor/perfect-scrollbar.min.js', 'resources/assets/vendor/dom-factory.js', 'resources/assets/vendor/material-design-kit.js', 'resources/assets/js/toggle-check-all.js', 'resources/assets/js/check-selected-row.js', 'resources/assets/js/dropdown.js', 'resources/assets/js/sidebar-mini.js', 'resources/assets/js/app.js', 'resources/assets/js/app-settings.js'])
</head>


@include('layouts.publicNavigation')

{{ $slot }} <!-- VISTA -->

@include('layouts.publicFooter')
