<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Konvergenz Network Solutions</title>

    <link rel="apple-touch-icon" href="https://konvergenz.co.ke/wp-content/uploads/2021/04/cropped-Konvergenz-Icon-01-32x32.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://konvergenz.co.ke/wp-content/uploads/2021/04/cropped-Konvergenz-Icon-01-32x32.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!--Layout Stylesheets-->
    <link rel="stylesheet" type="text/css" href="{{ asset('be/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('be/vendors/css/extensions/toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('be/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('be/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('be/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('be/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('be/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('be/css/themes/semi-dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('be/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('be/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('be/css/plugins/extensions/toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('be/css/style.css') }}">
    <link rel="stylesheet newest" type="text/css" href="{{ asset('be/css/style.custom.css') }}">
</head>

<body class="vertical-layout vertical-menu-modern 2-columns footer-static {{ !Auth::check() ? 'bg-full-screen-image' : '' }}" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
@auth
        @include('be.header')
        @include('be.sidebar')
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper">
                <!--Layout Scripts-->
                <script src="{{ asset('be/vendors/js/signalr/signalr.js') }}"></script>
                <script src="{{ asset('be/js/wise-erp-core.js') }}"></script>
                <script src="{{ asset('be/vendors/js/vendors.min.js') }}"></script>
                <script src="{{ asset('be/vendors/js/extensions/toastr.min.js') }}"></script>
                <script src="{{ asset('be/js/core/app-menu.js') }}"></script>
                <script src="{{ asset('be/js/core/app.js') }}"></script>
                <script src="{{ asset('be/js/scripts/components.js') }}"></script>
                <!--Render Body-->
                @yield('content')
            </div>
        </div>

        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>

        <!-- BEGIN: Footer-->
        <footer class="footer footer-static footer-light">
            <p class="clearfix blue-grey lighten-2 mb-0">
                <span class="float-md-left d-block d-md-inline-block mt-25">Copyright &copy; 2024 <a class="text-bold-800 grey darken-2" href="/" target="_blank"> Konvergenz, </a>All rights Reserved</span>
                <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
            </p>
        </footer>
        @else
        @yield('content')
        @endauth
    </body>

</html>