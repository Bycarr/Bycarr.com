@extends('admin.layouts.app')
@section('title', 'User Types')

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
@endsection
@section('breadcrumb')
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">User Type</h2>
                <div class="breadcrumb-wrapper float-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Manage</li>
                    </ol>
                </div>
                <div class="float-end">
                    @can('user-access-policy.perform', ['user-type', 'add'])
                        <a href="{{ route('admin.user-type.create') }}" class="btn btn-icon btn-primary waves-effect"
                            data-bs-toggle="tooltip" data-bs-original-title="Add New"><span><i
                                    data-feather='plus'></i></span></a>
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
                            <th width="10">#</th>
                            <th>Name</th>
                            <th class="text-center" width="80">Status</th>
                            <th width="150">Modified At</th>
                            <th width="150">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $index = $dataProvider->firstItem(); @endphp
                        @foreach ($dataProvider as $key => $data)
                            <tr>
                                <td>{{ $index + $key }}</td>
                                <td>{{ $data->name }}</td>

                                <td class="text-center">
                                    @can('user-access-policy.perform', ['user-type', 'changeStatus'])
                                        @if ($data->is_editable)
                                            <button class="btn btn-icon btn-outline-success btn-status waves-effect"
                                                data-action="{{ route('admin.user-type.change-status', $data->id) }}"
                                                data-bs-toggle="tooltip" data-bs-original-title="Change status">
                                        @endif
                                    @endcan

                                    <span class="">
                                        @if ($data->is_active == ConstantHelper::STATUS_INACTIVE)
                                            <i data-feather='minus'></i>
                                        @else
                                            <i data-feather='check'></i>
                                        @endif
                                    </span>
                                    @can('user-access-policy.perform', ['user-type', 'changeStatus'])
                                        @if ($data->is_editable)
                                            </button>
                                        @endif
                                    @endcan
                                </td>
                                <td>{{ CommonHelper::dateFormat($data->updated_at) }}</td>
                                <td>
                                    @if ($data->is_editable)
                                        @can('user-access-policy.perform', ['user-type', 'edit'])
                                            <a href="{{ route('admin.user-type.edit', $data->id) }}"
                                                class="btn btn-icon btn-outline-primary waves-effect" data-bs-toggle="tooltip"
                                                data-bs-original-title="Edit"><i data-feather='edit-2'></i></a>
                                        @endcan
                                        @can('user-access-policy.perform', ['user-type', 'delete'])
                                            <button class="btn btn-icon btn-outline-danger btn-delete waves-effect"
                                                data-action="{{ route('admin.user-type.destroy', $data->id) }}"
                                                data-bs-toggle="tooltip" data-bs-original-title="Trash"><i
                                                    data-feather='trash'></i></button>
                                        @endcan
                                    @endif

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
