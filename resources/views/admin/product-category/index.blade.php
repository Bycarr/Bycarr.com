@extends('admin.layouts.app')
@section('title', 'Product Category')

@section('scripts')
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
    <script>
        $('.edit-category').on('click', function() {
            $('#uuid').val($(this).data('uuid'));
            $('#title').val($(this).data('title'));
            $('#status').val($(this).data('status'));
        });
    </script>
@endsection
@section('breadcrumb')
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Product Category</h2>
                <div class="breadcrumb-wrapper float-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Manage</li>
                    </ol>
                </div>
                <div class="float-end">
                    @can('product-category-add')
                        <a href="javascript:void(0)" data-bs-target="#addCategoryModal" data-bs-toggle="modal">
                            <span class="btn btn-icon btn-primary waves-effect"><i data-feather='plus'></i></span>
                        </a>
                    @endcan
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
                            <th>Image</th>
                            <th class="text-center">Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $index = $dataProvider->firstItem(); @endphp
                        @foreach ($dataProvider as $key => $data)
                            <tr>
                                <td>{{ $index + $key }}</td>
                                <td>{{ $data->title }}</td>
                                <td>
                                    @if (!empty($data->image) && file_exists('storage/thumbs/' . $data->image))
                                        <a data-bs-toggle="modal" data-bs-target="#image{{ $data->id }}">

                                            <img class="round" src="{{ asset('storage/thumbs/' . $data->image) }}"
                                                height="40" width="40" alt="{{ $data->title }}" />
                                        </a>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @can('product-category-change-status')
                                        <button class="btn btn-icon btn-outline-success btn-status waves-effect"
                                            data-action="{{ route('admin.product-category.change-status', $data->uuid) }}"
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
                                @can('product-category-edit')
                                    <a href="{{ route('admin.product-category.attribute.index', $data->uuid) }}"
                                        class="btn btn-icon btn-outline-primary waves-effect" data-bs-toggle="tooltip"
                                        data-bs-original-title="Attributes"><i data-feather='list'></i></a>
                                    <a class="edit-category" href="javascript:void(0)" data-bs-target="#addCategoryModal"
                                        data-bs-toggle="modal" data-title="{{ $data->title }}"
                                        data-uuid="{{ $data->uuid }}" data-status="{{ $data->status }}">
                                        <span class="btn btn-icon btn-outline-secondary waves-effect"><i
                                                data-feather='edit-2'></i></span>
                                    </a>
                                @endcan
                                @can('product-category-delete')
                                    <button class="btn btn-icon btn-outline-danger btn-delete waves-effect"
                                        data-action="{{ route('admin.product-category.destroy', $data->uuid) }}"
                                        data-bs-toggle="tooltip" data-bs-original-title="Trash"><i
                                            data-feather='trash'></i></button>
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
<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered modal-add-new-role">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5 pb-5">
                <div class="text-center mb-4">
                    <h3 class="role-title">Add/Update Category</h3>
                </div>
                <!-- Add role form -->
                <form class="row" action="{{ route('admin.product-category.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="uuid" id="uuid">
                    <div class="col-12">
                        <input type="text" id="title" name="title" class="form-control"
                            placeholder="Enter category title" tabindex="-1" data-msg="Please enter category title"
                            required />
                    </div>
                    <div class="mb-1">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" id="image" class="form-control" value="">
                    </div>
                    {{-- <div class="col-6">
                            <div class="form-check form-switch">
                                <input type="checkbox" name="status" class="form-check-input" id="status"
                                    value="{{ ConstantHelper::STATUS_ACTIVE }}"
                                    >
                                <label class="form-check-label" for="status">Publish</label>
                            </div>
                        </div> --}}

                    <div class="col-12 text-center mt-2">
                        <button type="submit" class="btn btn-primary me-1">Submit</button>
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                            aria-label="Close">
                            Discard
                        </button>
                    </div>
                </form>
                <!--/ Add role form -->
            </div>
        </div>
    </div>
</div>

@endsection
