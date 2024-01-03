<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#ec1d23" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
    <link rel="icon" type="image/ico" href="">
    <link rel="stylesheet" href="{{ asset('/website/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/website/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/website/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/website/css/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/website/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/website/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('/website/css/ion.rangeSlider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/website/css/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('/website/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/website/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/vendors/sweetalert/sweetalert2.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/vuexy/vendors/sweetalert/ext-component-sweet-alerts.min.css') }}">
    @yield('styles')

</head>

<body>
    @include('website.layouts.inc.header')
    @yield('content')
    @include('website.layouts.inc.footer')


    <script src="{{ asset('/website/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/website/js/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('/website/js/popper.min.js') }}"></script>
    <script src="{{ asset('/website/js/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('/website/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('/website/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/website/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('/website/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/website/js/animation.js') }}"></script>
    <script src="{{ asset('/website/js/custom.js') }}"></script>
    <script src="{{ asset('/vuexy/vendors/sweetalert/sweetalert2.all.min.js') }}"></script>

    @yield('scripts')
    @stack('scripts')
</body>

</html>
