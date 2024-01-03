@extends('admin.layouts.app')
@section('title','Add User Type')
@section('scripts')
    <script>
        (function($) {
            $(document).ready(function() {
                $(document).on("click", "#selectAll", function() {
                    if (this.checked) {
                        $(':checkbox.access').each(function() {
                            this.checked = true;
                        });
                    } else {
                        $(':checkbox.access').each(function() {
                            this.checked = false;
                        });
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
                <h2 class="content-header-title float-start mb-0">User Type</h2>
                <div class="breadcrumb-wrapper float-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.user-type.index') }}">User Type</a></li>
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
    <form action="{{ route('admin.user-type.store') }}" method="post" id="form" class="form needs-validation"
        novalidate enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-1">
                            <label for="" class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                        </div>
                        {{-- <div class="mb-1">
                            <label for="" class="form-label">User Accesses</label>
                            <br>
                            @foreach ($modules as $item)
                                <label for="" class="form-label">{{ $item->name }}</label> :
                                <input type="checkbox" name="{{ $item->alias }}[]" class="form-check-input" value="add"
                                    id="{{ $item->alias }}-add">
                                <label class="form-check-label me-1" for="{{ $item->alias }}-add">Add</label>

                                <input type="checkbox" name="{{ $item->alias }}[]" class="form-check-input" value="edit"
                                    id="{{ $item->alias }}-edit">
                                <label class="form-check-label me-1" for="{{ $item->alias }}-edit">Edit</label>

                                <input type="checkbox" name="{{ $item->alias }}[]" class="form-check-input" value="delete"
                                    id="{{ $item->alias }}-delete">
                                <label class="form-check-label me-1" for="{{ $item->alias }}-delete">Delete</label>

                                <input type="checkbox" name="{{ $item->alias }}[]" class="form-check-input" value="view"
                                    id="{{ $item->alias }}-view">
                                <label class="form-check-label me-1" for="{{ $item->alias }}-view">View</label>

                                <input type="checkbox" name="{{ $item->alias }}[]" class="form-check-input"
                                    value="changeStatus" id="{{ $item->alias }}-changeStatus">
                                <label class="form-check-label me-1" for="{{ $item->alias }}-changeStatus">Change
                                    Status</label>

                                <br><br>
                            @endforeach

                        </div> --}}
                        <div class="table-responsive mb-2">
                            <table class="table table-flush-spacing">
                                <tbody>

                                    <tr>
                                        <td class="text-nowrap fw-bolder">
                                            Administrator Access
                                            <span data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Allows a full access to the system">
                                                <i data-feather="info"></i>
                                            </span>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="selectAll" />
                                                <label class="form-check-label" for="selectAll"> Select All </label>
                                            </div>
                                        </td>
                                    </tr>
                                    @foreach ($modules as $item)
                                        <tr>
                                            <td class="text-nowrap fw-bolder">{{ $item->name }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-2 me-lg-5">
                                                        <input class="form-check-input access" type="checkbox"
                                                            name="{{ $item->alias }}[]" value="view" id="{{ $item->alias }}-view" />
                                                        <label class="form-check-label" for="{{ $item->alias }}-view">
                                                            View
                                                        </label>
                                                    </div>
                                                    <div class="form-check me-2 me-lg-5">
                                                        <input class="form-check-input access" type="checkbox"
                                                            name="{{ $item->alias }}[]" value="add" id="{{ $item->alias }}-add" />
                                                        <label class="form-check-label" for="{{ $item->alias }}-add"> Add
                                                        </label>
                                                    </div>
                                                    <div class="form-check me-2 me-lg-5">
                                                        <input class="form-check-input access" type="checkbox"
                                                            name="{{ $item->alias }}[]" value="edit" id="{{ $item->alias }}-edit" />
                                                        <label class="form-check-label" for="{{ $item->alias }}-edit">
                                                            Edit
                                                        </label>
                                                    </div>
                                                    <div class="form-check me-2 me-lg-5">
                                                        <input class="form-check-input access" type="checkbox"
                                                            name="{{ $item->alias }}[]" value="delete"
                                                            id="{{ $item->alias }}-delete" />
                                                        <label class="form-check-label" for="{{ $item->alias }}-delete">
                                                            Delete
                                                        </label>
                                                    </div>
                                                    <div class="form-check me-2 me-lg-5">
                                                        <input class="form-check-input access" type="checkbox"
                                                            name="{{ $item->alias }}[]" value="changeStatus"
                                                            id="{{ $item->alias }}-changeStatus" />
                                                        <label class="form-check-label"
                                                            for="{{ $item->alias }}-changeStatus"> Change
                                                            Status
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <button class="btn btn-success waves-effect" type="submit"><i data-feather='save'></i>
                            Save</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                {{-- <div class="card"> --}}
                    {{-- <div class="card-body"> --}}
                        {{-- <div class="form-check form-switch">
                            <input type="checkbox" name="status" class="form-check-input" id="status"
                                value="{{ ConstantHelper::STATUS_ACTIVE }}"
                                {{ old('status', ConstantHelper::STATUS_ACTIVE) == ConstantHelper::STATUS_ACTIVE ? 'checked' : '' }}>
                            <label class="form-check-label" for="status">Publish</label>
                        </div> --}}
                        {{-- <div class="divider divider-dashed">
                            <div class="divider-text"></div>
                        </div> --}}
                        {{-- <button class="btn btn-success waves-effect full-width" type="submit"><i data-feather='save'></i>
                            Save</button> --}}
                    {{-- </div> --}}
                {{-- </div> --}}
            </div>
        </div>
    </form>
@endsection
