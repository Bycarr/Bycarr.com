@extends('admin.layouts.app')
@section('title', 'Product')
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
                <h2 class="content-header-title float-start mb-0">Product</h2>
                <div class="breadcrumb-wrapper float-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Manage</li>
                    </ol>
                </div>
                <div class="float-end">

                    @can('product-add')
                        <a href="{{ route('admin.product.create') }}" class="btn btn-icon btn-info waves-effect"
                            data-bs-toggle="tooltip" data-bs-original-title="Add New"><span><i data-feather='plus'></i> Add
                                New</span></a>
                    @endcan
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    @include('admin.layouts.inc.alert')
    @can('product-filter')
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

                {{-- <div class="col-md-3 mb-1">
                    <input type="text" id="fp-range" name="range" class="form-control flatpickr-range"
                        placeholder="Filter By Financed Date" value="{{ request()->range }}" />
                </div> --}}
                <div class="col-md-3 mb-1 row">
                    <div class="d-grid col-lg-6 col-md-12 mb-1 mb-lg-0">
                        <button type="submit" class="btn btn-icon btn-primary waves-effect " data-bs-toggle="tooltip"><span><i
                                    data-feather='search'></i> Filter</span></button>

                    </div>
                    <div class="d-grid col-lg-6 col-md-12">
                        <a href="{{ route('admin.product.index') }}" class="btn btn-icon btn-info waves-effect "
                            data-bs-toggle="tooltip"><span><i data-feather='refresh-ccw'></i> Reset</span></a>
                    </div>

                </div>
            </div>
        </form>
    @endcan


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
                            <th>Image</th>
                            <th>Status</th>
                            <th>Verified</th>
                            <th>Stock status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $index = $dataProvider->firstItem(); @endphp
                        @foreach ($dataProvider as $key => $data)
                            <tr>
                                <td>{{ $index + $key }}</td>
                                <td>
                                    {{ $data->title }}
                                    <span class="badge badge-light-info" title="Code"> {{ $data->code }}</span>
                                    <span class="badge badge-light-primary" title="Category">
                                        {{ $data?->category?->title }}</span>
                                    <span class="badge badge-light-secondary" title="Brand">
                                        {{ $data?->brand?->title }}</span>
                                    <span class="badge badge-light-success" title="Model">
                                        {{ $data?->model?->title }}</span>

                                </td>
                                <td>
                                    @if (!empty($data->image) && file_exists('storage/' . $data->image))
                                        <img src="{{ asset('storage/thumbs/' . $data->image) }}" class="img-fluid rounded"
                                            style="height:50px">
                                    @endif
                                </td>
                                <td class="text-center">
                                    @can('product-change-status')
                                        <button class="btn btn-icon btn-outline-success btn-status waves-effect"
                                            data-action="{{ route('admin.product.change-status', $data->uuid) }}"
                                            data-bs-toggle="tooltip" data-bs-original-title="Change status">

                                            <span class="">
                                                @if ($data->status == ConstantHelper::STATUS_INACTIVE)
                                                    <i data-feather='minus'></i>
                                                @else
                                                    <i data-feather='check'></i>
                                                @endif
                                            </span>
                                        </button>
                                    @else
                                        <button class="btn btn-icon btn-outline-success waves-effect">
                                            <span class="">
                                                @if ($data->status == ConstantHelper::STATUS_INACTIVE)
                                                    <i data-feather='minus'></i>
                                                @else
                                                    <i data-feather='check'></i>
                                                @endif
                                            </span>
                                        </button>
                                    @endcan
                            </td>
                            <td>
                                @if ($data->is_verified == ConstantHelper::STATUS_INACTIVE)
                                    <span class="btn btn-sm btn-icon btn-danger btn-verify"
                                        data-action="{{ route('admin.product.verify', $data->uuid) }}"
                                        data-bs-toggle="tooltip" data-bs-original-title="Verify Product">
                                        <i data-feather='slash'></i>
                                    </span>
                                @else
                                    <span class="btn btn-sm btn-icon btn-success">
                                        <i data-feather='check-circle'></i>
                                    </span>
                                @endif
                            </td>
                            <td>{{ $data->stock_status }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0"
                                        data-bs-toggle="dropdown">
                                        <i data-feather="more-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        @can('product-edit')
                                            <a class="dropdown-item" href="{{ route('admin.product.edit', $data->uuid) }}">
                                                <i data-feather="edit-2" class="me-50"></i>
                                                <span>Edit</span>
                                            </a>
                                        @endcan
                                        @can('product-delete')
                                            <a class="dropdown-item btn-delete" href="#"
                                                data-action="{{ route('admin.product.destroy', $data->uuid) }}"
                                                data-bs-toggle="tooltip" data-bs-original-title="Trash">
                                                <i data-feather="trash" class="me-50"></i>
                                                <span>Delete</span>
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
