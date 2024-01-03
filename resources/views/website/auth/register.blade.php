@extends('website.layouts.app')
@section('title', 'Account Login')
@section('content')
    <!-- Breadcrumb  -->
    <nav aria-label='breadcrumb' class='breadcrumb-wrap'>
        <div class='container'>
            <ol class='breadcrumb'>
                <li class='breadcrumb-item'><a href='{{ route('home.index') }}'>Home</a></li>
                <li class='breadcrumb-item active' aria-current='page'>Account</li>
            </ol>
        </div>
    </nav>
    <!-- Breadcrumb End  -->
    <!-- Register Page -->
    <section class="register mb">
        <div class="container">
            <div class="register-wrap">
                @include('admin.layouts.inc.alert')
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                            type="button" role="tab" aria-controls="nav-home" aria-selected="true">Sign In</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                            type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Sign
                            Up</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <form action="{{ route('customer.login') }}" method="POST">
                            @csrf
                            <div class="register-form">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your email address"
                                        name="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password"
                                        required>
                                </div>
                                <div class="form-group">
                                    <a href="{{route('customer.forget.password')}}">Forgot Password?</a>
                                </div>
                                <button type="submit">Sign In</button>
                                {{-- <span>or Sign In Via</span>
                                <div class="sign-in-option">
                                    <a href="#" class="facebook"><i class="lab la-facebook-f"></i> Facebook</a>
                                    <a href="#" class="google"><i class="lab la-google-plus"></i> Google</a>
                                </div> --}}
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <form action="" method="POST">
                            @csrf

                            <div class="register-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name" name="first_name"
                                        required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name" name="last_name"
                                        required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your email" name="email"
                                        required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Mobile" name="mobile">
                                </div>
                                {{-- <div class="form-group">
                                    <input type="date" class="form-control" placeholder="Date of birth">
                                </div> --}}
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="agree_terms">
                                    <label class="form-check-label" for="agree_terms">
                                        By continuing, I agree to the Terms of Use & Conditions
                                    </label>
                                </div>
                                <button type="submit">Sign Up</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register Page End -->
@endsection
