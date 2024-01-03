@extends('admin.layouts.app')
@section('title','Login')

@section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/css/authentication.css') }}">
@endsection
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="auth-wrapper auth-basic px-2">
                <div class="auth-inner my-2">
                    <!-- Login basic -->
                    <div class="card mb-0">
                        <div class="card-body">
                            <a href="{{ url('/') }}" class="brand-logo">
                                <img src="{{ asset('/website/img/logo1.jpeg') }}" alt="" class="w-50">

                                <h2 class="brand-text text-primary ms-1"></h2>
                            </a>

                            @include('admin.layouts.inc.alert')

                            <form class="auth-login-form mt-2 needs-validation" action="{{ route('admin.auth.login') }}" method="POST" novalidate>
                                @csrf
                                <div class="mb-1">
                                    <label for="login-email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="login-email" name="email" placeholder="john@example.com" aria-describedby="login-email" tabindex="1" autofocus required />
                                </div>

                                <div class="mb-1">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="login-password">Password</label>
                                        {{-- <a href="{{ route('password.request') }}">
                                            <small>Forgot Password?</small>
                                        </a> --}}
                                    </div>
                                    <div class="input-group input-group-merge form-password-toggle">
                                        <input type="password" class="form-control form-control-merge" id="login-password" name="password" tabindex="2" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="login-password" required />
                                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember-me" name="remember" tabindex="3" />
                                        <label class="form-check-label" for="remember-me"> Remember Me </label>
                                    </div>
                                </div>
                                <button class="btn btn-primary w-100" tabindex="4">Sign in</button>
                            </form>
                        </div>
                    </div>
                    <!-- /Login basic -->
                </div>
            </div>

        </div>
    </div>
</div>
<!-- END: Content-->
@endsection
