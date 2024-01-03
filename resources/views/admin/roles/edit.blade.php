@extends('admin.layouts.app')
@section('title', 'Edit Roles')

@section('scripts')
    <script src="{{ asset('/vuexy/vendors/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('/vuexy/vendors/select2/form-select2.min.js') }}"></script>

    <script>
        $("#select-all").change(function() {
            $(".permission").prop('checked', $(this).prop("checked"));
        });
        $('.permission').change(function() {
            if ($('.permission:checked').length == $('.permission').length) {
                $("#select-all").prop('checked', true);
            } else {
                $("#select-all").prop('checked', false);
            }
        });
        $(document).ready(function() {
            $('.permission').trigger('change');
        });
    </script>
@endsection
@section('breadcrumb')
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Roles</h2>
                <div class="breadcrumb-wrapper float-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.roles.index') }}">Roles</a></li>
                        <li class="breadcrumb-item active">Add New</li>
                    </ol>
                </div>
                <div class="float-end">

                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    @include('layouts.inc.alert')
    <form action="{{ route('admin.roles.update', $role_data->id) }}" method="post" id="form"
        class="form needs-validation" novalidate enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-1 row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Role Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name"
                                    value="{{ old('name', $role_data->name) }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row {{ $errors->has('permission') ? 'has-error' : '' }}">
                            <div class="col-12">
                                @if ($permissions->count() > 0)
                                    <div class="form-check mb-1">
                                        <input type="checkbox" class="form-check-input select-all" id="select-all" />
                                        <label class="form-check-label" for="select-all">Select All</label>
                                    </div>
                                    <div class="row">
                                        {{--                                    {{dd($permissions)}} --}}
                                        @foreach ($permissions as $key => $value)
                                            <div class="col-12">
                                                <strong class="d-inline-block m-b-5">Manage
                                                    {{ ucfirst(str_replace('_', ' ', $key)) }}
                                                    :</strong>
                                            </div>

                                            @foreach ($value as $permission)
                                                <div class="col-3">
                                                    <div class="form-check mb-1">
                                                        <input type="checkbox" name="permission[]"
                                                            class="permission form-check-input {{ $permission->name }}"
                                                            id="{{ $permission->name }}"
                                                            value="{{ $permission->id }}"{{ in_array($permission->id, $rolePermissions) ? 'checked' : '' }} />
                                                        <label class="form-check-label"
                                                            for="{{ $permission->name }}">{{ ucfirst(str_replace('-', ' ', $permission->name)) }}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="divider divider-dashed">
                                                <div class="divider-text"></div>
                                            </div>
                                        @endforeach
                                    </div>
                                    @error('permission')
                                        <span class="help-block error">{{ $message }}</span>
                                    @enderror
                                @else
                                    <p class="">No Permission Found in Database</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-success waves-effect full-width" type="submit"><i data-feather='save'></i>
                            Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
