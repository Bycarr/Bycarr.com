@extends('website.layouts.app')
@section('title', 'Booking')
@section('styles')
    <style>
        .booking-form .btn-bulk {
            margin-top: 20px;
            display: flex;
        }

        .booking-form .btn-bulk button {
            flex: 1;
            border: none;
            background: var(--primary-color);
            padding: 12px 30px;
            border-radius: var(--border-radius);
            color: var(--white-color);
            font-size: 16px;
            font-weight: 500;
            transition: var(--transition);
        }

        .booking-form .btn-bulk button:hover {
            opacity: .7;
        }
    </style>
@endsection
@section('scripts')
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>

    <script>
        $(document).ready(function() {
            var form = document.getElementById("myForm");
            $("#form").submit(function(e) {
                e.preventDefault();
                let payment_type = $("input[type='radio'][name='payment_method']:checked").val();
                var formData = $(this).serialize();
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You want to confirm booking!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, continue!',
                    cancelButtonText: 'No, cancel it.'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            type: "POST",
                            url: "{{ route('customer.booking.store') }}",
                            'dataType': 'json',
                            data: formData,
                            success: function(response) {
                                if (response.success == true) {
                                    if (response.booking.payment_method == 'COD') {
                                        Swal.fire({
                                            title: 'Success',
                                            text: 'Booking Confirmed Successfully',
                                            icon: 'success',
                                            timer: 2000
                                        }).then((a) => {
                                            if (a.value) {
                                                window.location.href =
                                                    "{{ route('home.index') }}" +
                                                    '/product/' + response
                                                    .product.slug;
                                            }
                                        });
                                    }
                                    if (response.booking.payment_method == 'ESEWA') {
                                        var path = "https://uat.esewa.com.np/epay/main";

                                        var params = {
                                            amt: response.booking.total_amount,
                                            psc: 0,
                                            pdc: 0,
                                            txAmt: 0,
                                            tAmt: response.booking.total_amount,
                                            pid: response.booking.uuid,
                                            scd: "EPAYTEST",
                                            su: "{{ route('customer.booking.esewa.success') }}",
                                            fu: "{{ route('customer.booking.esewa.failure') }}",
                                        }
                                        var form = document.createElement("form");
                                        form.setAttribute("method", "POST");
                                        form.setAttribute("action", path);

                                        for (var key in params) {
                                            var hiddenField = document.createElement(
                                                "input");
                                            hiddenField.setAttribute("type", "hidden");
                                            hiddenField.setAttribute("name", key);
                                            hiddenField.setAttribute("value", params[
                                                key]);
                                            form.appendChild(hiddenField);
                                        }
                                        document.body.appendChild(form);
                                        form.submit();
                                    }
                                    if (response.booking.payment_method == 'KHALTI') {
                                        var path =
                                            "https://a.khalti.com/api/v2//epayment/initiate/";

                                        var params = {
                                            amount: response.booking.total_amount *
                                                100,
                                            purchase_order_name: response.booking
                                                .uuid,
                                            purchase_order_id: response.booking
                                                .uuid,
                                            return_url: "{{ route('customer.booking.khalti.verification') }}",
                                            website_url: "{{ route('home.index') }}",
                                        }
                                        $.ajax({
                                            type: "POST",
                                            url: "https://a.khalti.com/api/v2/epayment/initiate/",
                                            data: params,
                                            beforeSend: function(xhr) {
                                                xhr.setRequestHeader(
                                                    "Authorization",
                                                    "Key " + "");
                                            },
                                            success: function(response) {
                                                console.log(response);
                                                window.location.href =
                                                    response.payment_url;
                                            },
                                            error: function(request, status,
                                                error) {
                                                let json = jQuery.parseJSON(
                                                    request.responseText
                                                );
                                                Swal.fire({
                                                    title: 'Error',
                                                    text: json
                                                        .message,
                                                    icon: 'error',
                                                    timer: 2000
                                                });
                                            }

                                        })
                                    }
                                    if (response.booking.payment_method ==
                                        'KHALTIOLD') {
                                        var config = {
                                            "publicKey": "live_public_key_5fcc6e22724840a2baaa49b01977ee6f",
                                            "productIdentity": response.booking
                                                .uuid,
                                            "productName": response.booking.uuid,
                                            "productUrl": "{{ route('home.index') }}",
                                            "paymentPreference": [
                                                "KHALTI",
                                                "EBANKING",
                                                "MOBILE_BANKING",
                                                "CONNECT_IPS",
                                                // "SCT",
                                            ],
                                            "eventHandler": {
                                                onSuccess(payload) {
                                                    $.ajax({
                                                        url: "{{ route('customer.booking.khalti.verification') }}",
                                                        type: 'POST',
                                                        data: {
                                                            amount: payload
                                                                .amount,
                                                            trans_token: payload
                                                                .token,
                                                            oid: payload
                                                                .product_identity,
                                                            "_token": "{{ csrf_token() }}",
                                                        },
                                                        success: function(
                                                            response) {
                                                            if (response
                                                                .success ==
                                                                true) {
                                                                Swal.fire({
                                                                        title: 'Success',
                                                                        text: 'Booking Confirmed Successfully',
                                                                        icon: 'success',
                                                                        timer: 2000
                                                                    })
                                                                    .then(
                                                                        (
                                                                            a
                                                                        ) => {
                                                                            if (a
                                                                                .value
                                                                            ) {
                                                                                window
                                                                                    .location
                                                                                    .href =
                                                                                    "{{ route('home.index') }}" +
                                                                                    '/product/' +
                                                                                    response
                                                                                    .product
                                                                                    .slug;
                                                                            }
                                                                        }
                                                                    );
                                                            }
                                                            if (response
                                                                .success ==
                                                                false) {
                                                                Swal.fire({
                                                                    title: 'Error',
                                                                    text: 'Something went wrong',
                                                                    icon: 'error',
                                                                    timer: 2000
                                                                });
                                                            }
                                                        },
                                                        error: function(
                                                            error) {
                                                            console.log(
                                                                "transaction failed"
                                                            );
                                                            Swal.fire({
                                                                title: 'Error',
                                                                text: 'Transaction Failed',
                                                                icon: 'error',
                                                                timer: 2000
                                                            });
                                                        }
                                                    });
                                                },
                                                onError(error) {
                                                    console.log(error);
                                                },
                                                onClose() {
                                                    console.log(
                                                        'widget is closing');
                                                }
                                            }
                                        };

                                        var checkout = new KhaltiCheckout(config);
                                        checkout.show({
                                            amount: response.booking
                                                .total_amount *
                                                100
                                        });
                                    }
                                } else {
                                    Swal.fire({
                                        title: 'Error',
                                        text: 'Something went wrong',
                                        icon: 'error',
                                        timer: 2000
                                    });
                                }

                            },
                            error: function(request, status, error) {
                                let json = jQuery.parseJSON(request.responseText);
                                Swal.fire({
                                    title: 'Error',
                                    text: json.message,
                                    icon: 'error',
                                    timer: 2000
                                });
                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection
@section('content')
    <!-- Breadcrumb  -->
    <nav aria-label='breadcrumb' class='breadcrumb-wrap'>
        <div class='container'>
            <ol class='breadcrumb'>
                <li class='breadcrumb-item'><a href='{{ route('home.index') }}'>Home</a></li>
                <li class='breadcrumb-item active' aria-current='page'>Booking</li>
            </ol>
        </div>
    </nav>
    <!-- Breadcrumb End  -->

    <!-- Book Page -->
    <section class="book-page mb">
        <div class="container booking-form">
            <form action='{{ route('customer.booking.store') }}' id="form" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->uuid }}">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="book-page-main">
                            <h3>Booking Details</h3>
                            @include('admin.layouts.inc.alert')

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class='form-group'>
                                        <input type='text' name="full_name" class='form-control' placeholder='Full Name'
                                            value="{{ auth('customer')->user()->fullname }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class='form-group'>
                                        <input type='text' name="mobile_no" class='form-control'
                                            placeholder='Phone Number' value="{{ auth('customer')->user()->mobile }}"
                                            required>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-6">
                                    <div class='form-group'>
                                        <input type='text' class='form-control' placeholder='Company Name' >
                                    </div>
                                </div> --}}
                                <div class="col-lg-6">
                                    <div class='form-group'>
                                        <input type='email' name="email" class='form-control'
                                            placeholder='Email Address' value="{{ auth('customer')->user()->email }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class='form-group'>
                                        <input type='text' class='form-control' placeholder='Address/Location'
                                            name="address">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class='form-group'>
                                        <input type='text' class='form-control' placeholder='City/Town' name="city">
                                    </div>
                                </div>
                                {{-- <div class="col-lg-6">
                                    <div class='form-group'>
                                        <select name='' class='form-select form-control'>
                                            <option value=''>Region</option>
                                            <option value='1'>Kathmandu</option>
                                            <option value='1'>Hetauda</option>
                                            <option value='1'>Janakpur</option>
                                            <option value='1'>Pokhara</option>
                                            <option value='1'>Jhapa</option>
                                        </select>
                                    </div>
                                </div> --}}
                                <div class="col-lg-6">
                                    <div class='form-group'>
                                        <input type='text' class='form-control' placeholder='Postal Code'
                                            name="postal_code">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class='form-group'>
                                        <textarea name='additional_info' class='form-control' placeholder='Additional Information if any'></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="book-page-sidebar">
                            <div class="booking-details">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>{{ $product->title }}</td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td><b>Rs.{{ $product->price }}</b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class='payment-list'>
                                <div class='form-check not-hidden'>
                                    <input class='form-check-input' type='radio' name='payment_method' value="ESEWA"
                                        id='flexRadioDefault1' checked>
                                    <label class='form-check-label' for='flexRadioDefault1'>
                                        <img src="{{ asset('website/img/esewa.svg') }}" alt="images">
                                    </label>
                                </div>
                                <div class='form-check not-hidden'>
                                    <input class='form-check-input' type='radio' name='payment_method' value="KHALTI"
                                        id='flexRadioDefault2'>
                                    <label class='form-check-label' for='flexRadioDefault2'>
                                        <img src="{{ asset('website/img/khalti.svg') }}" alt="images">
                                    </label>
                                </div>
                                <div class='form-check' id="hidden-form">
                                    <input class='form-check-input' type='radio' name='payment_method' value="COD"
                                        id='flexRadioDefault3'>
                                    <label class='form-check-label' for='flexRadioDefault3'>
                                        <img src="{{ asset('website/img/cash.png') }}" alt="images">
                                    </label>
                                </div>
                                <div class="hidden-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Bank Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Card Number">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Expiry Date"
                                            onfocus="(this.type='date')" id="date">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Amount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-bulk">
                            <button type="submit">Checkout</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Book Page End -->
@endsection
