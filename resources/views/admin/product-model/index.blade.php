@extends('admin.layouts.app')
@section('title', 'Product Model')

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
        $('.edit-model').on('click', function() {
            $('#uuid').val($(this).data('uuid'));
            $('#title').val($(this).data('title'));
            $('#code').val($(this).data('code'));
            $('#status').val($(this).data('status'));
        });
        $('.close').on('click', function() {
            $('#uuid').val('');
            $('#title').val('');
            $('#status').val('');
        });
    </script>
    {{-- <script>
        const inputField = document.getElementById('title');
        const dataList = document.getElementById('datalist');

        inputField.addEventListener('input', (event) => {
            const value = event.target.value;

            if (value.length > 0) {
                const xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (this.readyState === 4 && this.status === 200) {
                        const response = JSON.parse(xhr.responseText);
                        dataList.innerHTML = '';

                        response.forEach((result) => {
                            const option = document.createElement('option');
                            option.value = result.code;
                            dataList.appendChild(option);
                        });
                    }
                };
                xhr.open('GET', '{{ route('admin.check-model') }}?data=' + value);
                xhr.send();
            } else {
                dataList.innerHTML = '';
            }
        });
    </script> --}}
@endsection
@section('breadcrumb')
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Product Model</h2>
                <div class="breadcrumb-wrapper float-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.product-brand.index') }}">Brand</a></li>
                        <li class="breadcrumb-item active">Manage</li>
                    </ol>
                </div>
                <div class="float-end">
                    @can('product-model-add')
                        <a href="javascript:void(0)" data-bs-target="#addModelModal" data-bs-toggle="modal">
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
                            <th>Model</th>
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
                                <td class="text-center">
                                    @can('product-model-change-status')
                                        <button class="btn btn-icon btn-outline-success btn-status waves-effect"
                                            data-action="{{ route('admin.product-brand.model.change-status', ['brand' => $brand->id, 'id' => $data->uuid]) }}"
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
                                @can('product-model-edit')
                                    <a class="edit-model" href="javascript:void(0)" data-bs-target="#addModelModal"
                                        data-bs-toggle="modal" data-title="{{ $data->title }}"
                                        data-code="{{ $data->code }}" data-uuid="{{ $data->uuid }}"
                                        data-status="{{ $data->status }}">
                                        <span class="btn btn-icon btn-primary waves-effect"><i
                                                data-feather='edit-2'></i></span>
                                    </a>
                                @endcan
                                @can('product-model-delete')
                                    <button class="btn btn-icon btn-outline-danger btn-delete waves-effect"
                                        data-action="{{ route('admin.product-brand.model.destroy', ['brand' => $brand->id, 'model' => $data->uuid]) }}"
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
<div class="modal fade" id="addModelModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered modal-add-new-role">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5 pb-5">
                <div class="text-center mb-4">
                    <h3 class="role-title">Add/Update Model</h3>
                </div>
                <!-- Add role form -->
                <form class="row" action="{{ route('admin.product-brand.model.store', $brand->uuid) }}"
                    method="POST">
                    @csrf
                    <input type="hidden" name="uuid" id="uuid">
                    <div class="mb-1">
                        <input type="text" id="title" name="title" class="form-control"
                            placeholder="Enter title name" tabindex="-1" data-msg="Please enter title name" required />
                    </div>
                    {{-- <datalist id="datalist"></datalist> --}}

                    <div class="col-12 text-center mt-2">
                        <button type="submit" class="btn btn-primary me-1">Submit</button>
                        <button type="reset" class="btn btn-outline-secondary close" data-bs-dismiss="modal"
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
