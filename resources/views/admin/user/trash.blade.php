@extends('admin.layouts.app')
@section('title','Users')

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
    </script>
@endsection
@section('breadcrumb')
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">User</h2>
                <div class="breadcrumb-wrapper float-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">User</a></li>
                        <li class="breadcrumb-item active">Trash</li>
                    </ol>
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
                            <th width="5%">#</th>
                            <th width=20%>Name</th>
                            <th width=15%>User Type</th>
                            <th class="text-center" width="10%">Status</th>
                            <th width="10%">Modified At</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $index = $dataProvider->firstItem(); @endphp
                        @foreach ($dataProvider as $key => $data)
                            <tr>
                                <td>{{ $index + $key }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->userType->name }}</td>

                                <td class="text-center">

                                    <span class="">
                                        @if ($data->status == ConstantHelper::STATUS_INACTIVE)
                                            <i data-feather='minus'></i>
                                        @else
                                            <i data-feather='check'></i>
                                        @endif
                                    </span>
                                </td>
                                <td>{{ CommonHelper::dateFormat($data->updated_at) }}</td>
                                <td>
                                    <button class="btn btn-icon btn-outline-primary btn-restore waves-effect"
                                        data-action="{{ route('admin.user.restore', $data->id) }}"
                                        data-bs-toggle="tooltip" data-bs-original-title="Restore"><i
                                            data-feather='corner-right-up'></i></button>
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
