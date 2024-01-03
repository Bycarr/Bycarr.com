@extends('website.layouts.app')
@section('title', 'Contact Us')

@section('content')
    <!-- Breadcrumb  -->
    <nav aria-label='breadcrumb' class='breadcrumb-wrap'>
        <div class='container'>
            <ol class='breadcrumb'>
                <li class='breadcrumb-item'><a href='index.php'>Home</a></li>
                <li class='breadcrumb-item active' aria-current='page'>Contact Us</li>
            </ol>
        </div>
    </nav>
    <!-- Breadcrumb End  -->

    <!-- COntact Us Page -->
    <section class="contact-us mb">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-infos">
                        <ul>
                            <li>
                                <i class="las la-map-marker-alt"></i>
                                <div class="contact-list">
                                    <span>Address/Location</span>
                                    <p>{{ config('settings.address') }}</p>
                                </div>
                            </li>
                            <li>
                                <i class="las la-phone-volume"></i>
                                <div class="contact-list">
                                    <span>Contact Number</span>
                                    <p>{{ config('settings.contact') }}</p>
                                </div>
                            </li>
                            <li>
                                <i class="las la-envelope-open-text"></i>
                                <div class="contact-list">
                                    <span>Email Address</span>
                                    <p>{{ config('settings.email') }}</p>
                                </div>
                            </li>
                            <li>
                                <i class="las la-globe"></i>
                                <div class="contact-list">
                                    <span>Website</span>
                                    <p>{{ config('settings.website') }}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    @include('admin.layouts.inc.alert')

                    <div class="contact-form">
                        <form action="" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Full Name" name="full_name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email Address"
                                            name="email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Address/Location"
                                            name="address">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Company Name"
                                            name="company">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Additional Information" name="queries"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="btn-bulk">
                                        <button type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="map">
                {!! config('settings.map') !!}
            </div>
        </div>
    </section>
    <!-- COntact Us Page End -->
@endsection
