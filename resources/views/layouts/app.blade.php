<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="PNDC">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/vendors/sweetalert/sweetalert2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/vendors/sweetalert/ext-component-sweet-alerts.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/css/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/css/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/css/semi-dark-layout.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/css/vertical-menu.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/css/style.css') }}">
    <!-- END: Custom CSS-->

    @yield('styles')
</head>
<!-- END: Head-->

<body class="vertical-layout vertical-menu-modern navbar-floating footer-static @guest blank-page @endguest" data-open="click" data-menu="vertical-menu-modern" data-col="">
    @guest
    @yield('content')
    @else
    @include('layouts.inc.sidebar')

    @include('layouts.inc.header')
    <!-- BEGIN: Content-->
    <div class="app-content content pt-2">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                @yield('breadcrumb')
            </div>
            <div class="content-body">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    @include('layouts.inc.footer')
    @endguest

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('/vuexy/js/vendors.min.js') }}"></script>
    <script src="{{ asset('/vuexy/vendors/sweetalert/sweetalert2.all.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('/vuexy/js/app-menu.js') }}"></script>
    <script src="{{ asset('/vuexy/js/app.js') }}"></script>
    <script src="{{ asset('/vuexy/js/script.js') }}"></script>
    <!-- END: Theme JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
    <!-- BEGIN: Page JS-->
    @yield('scripts')
    @stack('scripts')
    <!-- END: Page JS-->
</body>
<!-- END: Body-->

</html>