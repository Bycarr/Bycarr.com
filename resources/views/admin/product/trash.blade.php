@extends('admin.layouts.app')
@section('title', 'Product')

@section('scripts')
    <script>
        $('.btn-restore').on('click', function(e) {
            e.preventDefault();
            var obj = $(this);
            var url = $(this).data('action');
            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to restore this record!',
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
                            _method: 'GET'
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
                <h2 class="content-header-title float-start mb-0">Products</h2>
                <div class="breadcrumb-wrapper float-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.product.index') }}">Products</a></li>
                        <li class="breadcrumb-item active">Trash</li>
                    </ol>
                </div>
                <div class="float-end">

                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    @include('admin.layouts.inc.alert')
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
                            <th>Title</th>
                            <th>Category</th>
                            <th>Model</th>
                            <th>IMEI</th>
                            <th>Serial No</th>
                            <th>Verified</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $index = $dataProvider->firstItem(); @endphp
                        @foreach ($dataProvider as $key => $data)
                            <tr>
                                <td>{{ $index + $key }}</td>
                                <td>{{ $data->title }}</td>
                                <td>{{ $data->category->title }}</td>
                                <td>{{ $data->model->title ?? null }}</td>
                                <td>
                                    <p>{{ isset($data->imei_no_1) ? '(1)' . $data->imei_no_1 : '' }}</p>
                                    <p>{{ isset($data->imei_no_2) ? '(2)' . $data->imei_no_2 : '' }}</p>
                                </td>
                                <td>
                                    {{ $data->serial_no }}
                                </td>
                                <td class="text-center">
                                    @if ($data->status == ConstantHelper::STATUS_INACTIVE)
                                        <i data-feather='minus'></i>
                                    @else
                                        <i data-feather='check'></i>
                                    @endif
                                </td>
                                <td>
                                    @can('product-restore')
                                        <a class="btn btn-icon btn-outline-primary btn-restore waves-effect"
                                            data-action="{{ route('admin.product.restore', $data->uuid) }}"
                                            data-bs-toggle="tooltip" data-bs-original-title="Restore"><i
                                                data-feather='corner-right-up'></i></a>
                                    @endcan
                                    @can('product-delete')
                                        <a class="btn btn-icon btn-danger btn-delete waves-effect"
                                            data-action="{{ route('admin.product.force-delete', $data->uuid) }}"
                                            data-bs-toggle="tooltip" data-bs-original-title="Force Delete"><i
                                                data-feather='trash'></i></a>
                                    @endcan

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
