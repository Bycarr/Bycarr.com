@extends('admin.layouts.app')
@section('title', 'Edit User')

@section('scripts')
    <script src="{{ asset('/vuexy/vendors/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('/vuexy/vendors/select2/form-select2.min.js') }}"></script>
    <script>
        (function($) {
            $(document).ready(function() {
                $(document).on("click", "#changePassword", function() {
                    if (this.checked) {
                        $('.new-password').removeClass('d-none');
                    } else {
                        $('.new-password').addClass('d-none');

                    }
                });
            });
        })(jQuery);
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
                        <li class="breadcrumb-item active">{{ $model->name }}</li>
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
    <form action="{{ route('admin.user.update', $model->id) }}" method="post" id="form" class="form needs-validation"
        enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @if (request()->has('agent'))
                            <input type="hidden" name="agent" value="{{ request()->agent }}">
                        @endif
                        <div class="mb-1 row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Agent {!! request()->has('agent') || auth()->user()->agent_id != '' || $model->agent_id != ''
                                    ? '<span class="text-danger">*</span>'
                                    : '' !!}</label>
                                <select name="agent_id" id="agent" class="select2"
                                    {{ request()->has('agent') || auth()->user()->agent_id != '' || $model->agent_id != '' ? 'required' : '' }}>
                                    @if (auth()->user()->agent_id)

                                        @foreach ($agents as $agent)
                                            @if (auth()->user()->agent_id == $agent->id)
                                                <option value="{{ $agent->id }}"
                                                    {{ auth()->user()->agent_id == $agent->id ? 'selected' : '' }}>
                                                    {{ $agent->title }}</option>
                                            @endif
                                        @break;
                                    @endforeach
                                @else
                                    <option value="">Select agent</option>

                                    @foreach ($agents as $agent)
                                        @if ($selectedAgent)
                                            @if ($agent->id == $selectedAgent->id)
                                                <option value="{{ $agent->id }}"
                                                    {{ old('agent_id', $model->agent_id) == $agent->id ? 'selected' : '' }}>
                                                    {{ $agent->title }}</option>
                                            @endif
                                        @else
                                            <option value="{{ $agent->id }}"
                                                {{ old('agent_id', $model->agent_id) == $agent->id ? 'selected' : '' }}>
                                                {{ $agent->title }}</option>
                                        @endif
                                    @endforeach

                                @endif
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Roles <span class="text-danger">*</span></label>
                            <select name="roles[]" id="" class="select2" required>
                                <option value="">Select Role</option>

                                @foreach ($roles as $role)
                                    <option value="{{ $role }}"
                                        {{ in_array($role, $userRole) ? 'selected' : '' }}>
                                        {{ $role }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="mb-1">
                        <label for="" class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name"
                            value="{{ old('name', $model->name) }}" required>
                    </div>
                    <div class="mb-1 row">
                        <div class="col-md-6">
                            <label for="" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email"
                                value="{{ old('email', $model->email) }}" required>

                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label"></label>

                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" id="changePassword" />
                                <label class="form-check-label" for="changePassword"> Change Password </label>
                            </div>
                        </div>
                    </div>


                    <div class="mb-1 new-password d-none">
                        <label for="" class="form-label">New Password <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    {{-- <div class="mb-1 row">
                        <div class="col-md-4">
                            <label for="" class="form-label">Mobile</label>
                            <input type="text" class="form-control" name="mobile"
                                value="{{ old('mobile', $model->mobile) }}">

                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">District</label>
                            <select name="district_id" id="" class="select2">
                                <option value="">Select District</option>

                                @foreach ($districts as $district)
                                    <option value="{{ $district->id }}"
                                        {{ old('district_id', $model->district_id) == $district->id ? 'selected' : '' }}>
                                        {{ $district->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address"
                                value="{{ old('address', $model->address) }}">

                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="form-check form-switch">
                        <input type="checkbox" name="status" class="form-check-input" id="status"
                            value="{{ ConstantHelper::STATUS_ACTIVE }}"
                            {{ old('status', ConstantHelper::STATUS_ACTIVE) == ConstantHelper::STATUS_ACTIVE ? 'checked' : '' }}>
                        <label class="form-check-label" for="status">Publish</label>
                    </div>
                    <div class="divider divider-dashed">
                        <div class="divider-text"></div>
                    </div>
                    <button class="btn btn-success waves-effect full-width" type="submit"><i data-feather='save'></i>
                        Save</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
