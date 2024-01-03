@extends('website.layouts.app')
@section('title', 'Forget Password')
@section('content')
    <!-- Breadcrumb  -->
    <nav aria-label='breadcrumb' class='breadcrumb-wrap'>
        <div class='container'>
            <ol class='breadcrumb'>
                <li class='breadcrumb-item'><a href='{{ route('home.index') }}'>Home</a></li>
                <li class='breadcrumb-item active' aria-current='page'>Forget Password</li>
            </ol>
        </div>
    </nav>
    <!-- Breadcrumb End  -->
    <!-- Register Page -->
    <section class="register mb">
        <div class="container">
            <div class="register-wrap">
                @include('admin.layouts.inc.alert')

                        <form action="" method="POST">
                            @csrf
                            <div class="register-form">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your email address"
                                        name="email" required>
                                </div>
                                <div class="form-group">
                                    <a href="{{route('customer.register')}}">Login Instead?</a>
                                </div>
                                <button type="submit">Get Link</button>

                            </div>
                        </form>
            </div>
        </div>
    </section>
    <!-- Register Page End -->
@endsection
