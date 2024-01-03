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
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo.svg') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/vendors/sweetalert/sweetalert2.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/vuexy/vendors/sweetalert/ext-component-sweet-alerts.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/vendors/tabler/tabler-icons.min.css') }}">
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
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/css/toastr.min.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/css/vertical-menu.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/css/style.css') }}">
    <!-- END: Custom CSS-->

    @yield('styles')
</head>
<!-- END: Head-->

<body class="vertical-layout vertical-menu-modern navbar-floating footer-static @guest blank-page @endguest"
    data-open="click" data-menu="vertical-menu-modern" data-col="">
    @guest
        @yield('content')
    @else
        @include('admin.layouts.inc.sidebar')

        @include('admin.layouts.inc.header')
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

        @include('admin.layouts.inc.footer')
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
    <script src="{{ asset('/vuexy/js/toastr.min.js') }}"></script>
    {{-- <script src="{{ asset('/vuexy/vendors/validation/jquery.validate.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('/vuexy/js/form-validation.js') }}"></script> --}}
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
    <script>
        var baseUrl = '{!! url('/') !!}';

        var CKEDITOR_BASEPATH = baseUrl + '/js/ckeditor/';
    </script>
    <script src="{{ asset('js/admin.js') }}"></script>

    <script>
        var options = {
            filebrowserImageBrowseUrl: '{{ url('') }}/system-user/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '{{ url('') }}/system-user/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '{{ url('') }}/system-user/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '{{ url('') }}/system-user/laravel-filemanager/upload?type=Files&_token='
        };
        $('.editor').ckeditor(options);

        $('#changePasswordForm').on('submit', function(e) {
            e.preventDefault();
            var data = $(this).serialize();
            var url = '{{ route('admin.change-password') }}';
            $.ajax({
                type: "post",
                url: url,
                data: data,
                dataType: "json",
                success: function(response) {
                    if (response.status == 'ok') {
                        jQuery('.alert-success').html('');
                        jQuery('.alert-danger').hide();
                        jQuery('.alert-success').show();
                        jQuery('.alert-success').append('<p>' + response.message + '</p>');
                        window.location.href =
                            "{{ route('admin.auth.logout', ['message' => 'Password changed successfully, please login with new password !!']) }}";
                    } else if (response.error == 'false') {
                        jQuery('.alert-danger').html('');
                        jQuery('.alert-danger').show();
                        jQuery('.alert-danger').append('<p>' + response.message + '</p>');
                        setTimeout(function() {
                            $('#myModal').modal('hide');
                            $('#changePasswordForm')[0].reset();
                        }, 10000);
                        $('#changePasswordForm').reset();
                    } else {
                        jQuery('.alert-danger').html('');
                        jQuery.each(response.errors, function(key, value) {
                            jQuery('.alert-danger').show();
                            jQuery('.alert-danger').append('<p>' + value + '</p>');
                        });
                    }
                },
                error: function(xhr) {}
            });
        });
    </script>

    <!-- BEGIN: Page JS-->
    @yield('scripts')
    @stack('scripts')
    <!-- END: Page JS-->
</body>
<!-- END: Body-->

</html>
