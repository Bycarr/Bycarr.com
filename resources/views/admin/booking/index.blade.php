@extends('admin.layouts.app')
@section('title', 'Booking')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/vendors/pickers/css/flatpickr/flatpickr.min.css') }}">

@endsection
@section('scripts')
    <script src="{{ asset('/vuexy/vendors/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('/vuexy/vendors/select2/form-select2.min.js') }}"></script>

    <script src="{{ asset('/vuexy/vendors/pickers/js/flatpickr/flatpickr.min.js') }}"></script>
    <script>
        (function(window, document, $) {
            'use strict';
            var rangePickr = $('.flatpickr-range');
            if (rangePickr.length) {
                rangePickr.flatpickr({
                    mode: 'range'
                });
            }
        })(window, document, jQuery);
        $(function() {
            $('#category').change(function() {
                var category = $(this).children("option:selected").val();
                getModel(category);
            })

            function getModel(category) {
                var uri = "{{ route('admin.get-model', ':category') }}";
                uri = uri.replace(":category", category);
                $.ajax({
                    url: uri,
                    type: 'get',
                    dataType: 'json',
                    success: function(response) {
                        var models = response.models;
                        modelSelect(models);
                    }
                });
            }

            function modelSelect(models) {
                document.getElementById('models').innerHTML = '';
                // document.getElementById('models').innerHTML =
                //     `<option value=''>Select Model</option>` +
                //     models.reduce((tmp, x) =>
                //         `${tmp}<option value='${x.id}'>${x.title} - ${x.code}</option>`,
                //         '');
                $("#models").append(
                    '<option value="">Filter By Model Code</option>');
                if (models) {
                    models.forEach(function(item) {
                        $('#models').append($("<option/>", {
                            value: item.id,
                            text: item.title + '-' + item.code
                        }));
                    });
                }
            }

        });
    </script>
    <script>
        $('.btn-status').on('click', function(e) {
            e.preventDefault();
            var obj = $(this);
            var url = $(this).data('action');
            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to change status!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, continue!',
                cancelButtonText: 'No, keep it.'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "GET",
                        url: url,
                        'dataType': 'json',
                        success: function(response) {
                            if (response.status == 0) {
                                Swal.fire({
                                    title: 'Success',
                                    text: response.message,
                                    icon: 'success',
                                    timer: 2000
                                });
                                if (response.data == true) {
                                    obj.find('.feather').replaceWith(feather.icons['check']
                                        .toSvg());
                                } else {
                                    obj.find('.feather').replaceWith(feather.icons['minus']
                                        .toSvg());
                                }
                            }
                            if (response.status == 1) {
                                Swal.fire({
                                    title: 'Error',
                                    text: response.message,
                                    icon: 'error',
                                    timer: 2000
                                });
                            }

                        },
                        error: function(e) {
                            if (e.responseJSON.message) {
                                Swal('Error', e.responseJSON.message, 'error');
                            } else {
                                Swal('Error',
                                    'Something went wrong while processing your request.',
                                    'error')
                            }
                        }
                    });
                }
            });
        });
        $('.btn-verify').on('click', function(e) {
            e.preventDefault();
            var obj = $(this);
            var url = $(this).data('action');
            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to verify this product!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, continue!',
                cancelButtonText: 'No, keep it.'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "GET",
                        url: url,
                        'dataType': 'json',
                        success: function(response) {
                            if (response.status == 0) {
                                Swal.fire({
                                    title: 'Success',
                                    text: response.message,
                                    icon: 'success',
                                    timer: 2000
                                });
                                window.location.reload();
                            }
                            if (response.status == 1) {
                                Swal.fire({
                                    title: 'Error',
                                    text: response.message,
                                    icon: 'error',
                                    timer: 2000
                                });
                            }

                        },
                        error: function(e) {
                            if (e.responseJSON.message) {
                                Swal('Error', e.responseJSON.message, 'error');
                            } else {
                                Swal('Error',
                                    'Something went wrong while processing your request.',
                                    'error')
                            }
                        }
                    });
                }
            });
        });

        $('.btn-delete').on('click', function(e) {
            e.preventDefault();
            var obj = $(this);
            var url = $(this).data('action');
            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to delete this record!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, continue!',
                cancelButtonText: 'No, keep it.'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {
                            _method: 'DELETE'
                        },
                        'dataType': 'json',
                        success: function(response) {
                            if (response.status == 0) {
                                Swal.fire({
                                    title: 'Success',
                                    text: response.message,
                                    icon: 'success',
                                    timer: 2000
                                });
                                window.location.reload();
                            }
                            if (response.status == 1) {
                                Swal.fire({
                                    title: 'Error',
                                    text: response.message,
                                    icon: 'error',
                                    timer: 2000
                                });
                            }

                        },
                        error: function(e) {
                            if (e.responseJSON.message) {
                                Swal('Error', e.responseJSON.message, 'error');
                            } else {
                                Swal('Error',
                                    'Something went wrong while processing your request.',
                                    'error')
                            }
                        }
                    });
                }
            });
        });
    </script>
@endsection
@section('breadcrumb')
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Booking</h2>
                <div class="breadcrumb-wrapper float-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Manage</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    @include('admin.layouts.inc.alert')
    <form action="">
        <div class="row">
            <div class="col-md-3 mb-1">
                <select name="category" id="category" class="form-select select2 category">
                    <option value="">Filter By Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ request()->category == $category->id ? 'selected' : '' }}>
                            {{ $category->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3 mb-1">
                <select name="brand" id="brands" class="form-select select2">
                    <option value="">Filter By Brand</option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}" {{ request()->brand == $brand->id ? 'selected' : '' }}>
                            {{ $brand->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3 mb-1">
                <select name="model" id="models" class="form-select select2">
                    <option value="">Filter By Model</option>
                    @foreach ($models as $model)
                        <option value="{{ $model->id }}" {{ request()->model == $model->id ? 'selected' : '' }}>
                            {{ $model->title }} - {{ $model->code }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3 mb-1">
                <select name="booking_status" id="" class="form-select">
                    <option value="">Status</option>
                    @foreach (CommonHelper::bookingStatusList() as $key => $label)
                        <option value="{{ $key }}" {{ $key == request()->status ? 'selected' : '' }}>
                            {{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3 mb-1">
                <select name="payment_status" id="" class="form-select">
                    <option value="">Payment Status</option>
                    @foreach (CommonHelper::paymentStatusList() as $key => $label)
                        <option value="{{ $key }}" {{ $key == request()->payment_status ? 'selected' : '' }}>
                            {{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3 mb-1">
                <input type="text" id="fp-range" name="order_date" class="form-control flatpickr-range"
                    placeholder="Filter By Order Date" value="{{ request()->order_date }}" />
            </div>
            <div class="col-md-3 mb-1 row">
                <div class="d-grid col-lg-6 col-md-12 mb-1 mb-lg-0">
                    <button type="submit" class="btn btn-icon btn-primary waves-effect " data-bs-toggle="tooltip"><span><i
                                data-feather='search'></i> Filter</span></button>

                </div>
                <div class="d-grid col-lg-6 col-md-12">
                    <a href="{{ route('admin.booking.index') }}" class="btn btn-icon btn-info waves-effect "
                        data-bs-toggle="tooltip"><span><i data-feather='refresh-ccw'></i> Reset</span></a>
                </div>

            </div>
        </div>
    </form>

    @if ($dataProvider->isEmpty())
        <div class="card">
            <div class="card-body">
                No record(s) found.
            </div>
        </div>
    @else
        <div class="card">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product</th>
                            <th>Total Amount</th>
                            <th>Paid Amount</th>
                            <th>Dicount</th>
                            <th>Status</th>
                            <th>Payment</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $index = $dataProvider->firstItem(); @endphp
                        @foreach ($dataProvider as $key => $data)
                            <tr>
                                <td>{{ $data->code }}</td>
                                <td>
                                    <div class="mb-1">
                                        {{ $data->product->title }}
                                    </div>
                                    <div class="mb-1">

                                        <span class="badge badge-light-info" title="Code">
                                            {{ $data->product->code }}</span>
                                        <span class="badge badge-light-primary" title="Category">
                                            {{ $data?->product?->category?->title }}</span>
                                        <span class="badge badge-light-secondary" title="Brand">
                                            {{ $data?->product?->brand?->title }}</span>
                                        <span class="badge badge-light-success" title="Model">
                                            {{ $data?->product?->model?->title }}</span>
                                    </div>
                                    <div>
                                        @if (!empty($data->product->image) && file_exists('storage/' . $data->product->image))
                                            <img src="{{ asset('storage/thumbs/' . $data->product->image) }}"
                                                class="img-fluid rounded" style="height:50px">
                                        @endif
                                    </div>
                                </td>
                                <td>{{ $data->total_amount }}</td>
                                <td>{{ $data->paid_amount }}</td>
                                <td>{{ $data->discount }} %</td>

                                <td>
                                    <span
                                        class="badge badge-light-{{ CommonHelper::bookingStatusClass($data->status, false) }}">
                                        {{ CommonHelper::bookingStatus($data->status) }}</span>
                                </td>
                                <td>
                                    <span class="badge badge-light-primary" title="Payment Method">
                                        {{ $data->payment_method }}</span>
                                    <span class="badge badge-light-secondary" title="Payment Status">
                                        {{ CommonHelper::paymentStatus($data->payment_status) }}</span>
                                </td>

                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0"
                                            data-bs-toggle="dropdown">
                                            <i data-feather="more-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            @can('booking-update')
                                                <a class="dropdown-item" href="{{ route('admin.booking.show', $data->uuid) }}">
                                                    <i data-feather="eye" class="me-50"></i>
                                                    <span>View Details</span>
                                                </a>
                                            @endcan
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{ $dataProvider->appends(request()->query())->links('admin.layouts.inc.pagination') }}

    @endif

@endsection
