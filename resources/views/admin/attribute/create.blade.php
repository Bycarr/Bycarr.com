@extends('admin.layouts.app')
@section('title', 'Add Attribute')

@section('scripts')
    <script src="{{ asset('/vuexy/vendors/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('/vuexy/vendors/select2/form-select2.min.js') }}"></script>

    <script>
        $('#options').hide();

        $(document).ready(function() {
            $('#type').change(function() {
                var type = $(this).children("option:selected").val();
                if (type == 'select') {
                    $('#options').show();
                    $('.options').removeAttr('disabled');
                } else {
                    $('.options').attr('disabled', 'disabled');
                    $('#options').hide();
                }
            })
            let count = 10;
            $(document).on('click', '.option_add', function() {
                let html = `<div class="row" style="margin-top: 1rem;">

                                <div class="col-md-3">
                                    <button type="button" class="btn btn-danger btn-icon btn-outline-primary waves-effect append_option_remove">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                    </button>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control options" name="options[]" required>
                                </div>
                            </div>`;
                if (count > 1) {
                    $('#options').append(html);
                    count--;
                } else {
                    Swal.fire({
                        title: 'Oops!',
                        text: "Maximum limit reached.",
                        icon: 'warning',
                        timer: 2000
                    });
                }
            })

            $(document).on('click', '.append_option_remove', function() {
                $(this).parent().parent().remove();
                count++;
                // $('#custom_email_trigger').remove(html);
            })
        })
    </script>
@endsection
@section('breadcrumb')
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Attribute</h2>
                <div class="breadcrumb-wrapper float-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.attribute.index') }}">Attribute</a></li>
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
    <form action="{{ route('admin.attribute.store') }}" method="post" id="form" class="form needs-validation"
        novalidate enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-1 row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}"
                                    required>

                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Type <span class="text-danger">*</span></label>
                                <select name="type" id="type" class="form-control" required>
                                    <option value="text">TEXT</option>
                                    <option value="select">SELECT</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-1" id="options">
                            <label for="" class="form-label">Options</label>

                            <div class="row">
                                <div class="col-md-3">
                                    <button type="button"
                                        class="btn btn-primary btn-icon btn-outline-primary waves-effect option_add">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                        </svg>
                                    </button>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control options" name="options[]" required disabled>
                                </div>

                            </div>

                        </div>
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
                            <label class="form-check-label" for="status">Publish ?</label>
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
