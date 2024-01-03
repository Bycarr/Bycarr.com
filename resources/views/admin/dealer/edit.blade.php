@extends('admin.layouts.app')
@section('title', 'Edit Dealer')

@section('scripts')
    <script>
        $(document).ready(function() {
            let count = 10;
            $(document).on('click', '.contact_trigger_add', function() {
                let html = `<div class="row" style="margin-top: 1rem;">
                                <div class="col-md-9">
                                    <input type="text" class="form-control col-md-8" name="contact[]" required>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-danger btn-icon btn-outline-primary waves-effect contact_trigger_remove">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                    </button>
                                </div>
                            </div>`;
                if (count > 1) {
                    $('#append_contact_trigger').append(html);
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

            $(document).on('click', '.contact_trigger_remove', function() {
                $(this).parent().parent().remove();
                count++;
                // $('#custom_email_trigger').remove(html);
            });
            $(".btn-delete").on("click", function() {
                $object = $(this);
                var action = $object.data('action');
                var imageType = $object.data('type');
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You will not be able to recover this !',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, keep it'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            url: action,
                            type: "POST",
                            data: {
                                type: imageType
                            },
                            dataType: "json",
                            success: function(response) {
                                Swal.fire("Deleted!", response.message, "success");
                                $('.' + imageType + '-preview').remove();
                            },
                            error: function(xhr, ajaxOptions, thrownError) {
                                Swal.fire('Error',
                                    'Something went wrong while processing your request.',
                                    'error');
                            }
                        });
                    }
                })
            });

        })
    </script>
@endsection
@section('breadcrumb')
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Dealer</h2>
                <div class="breadcrumb-wrapper float-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.dealer.index') }}">Dealer</a></li>
                        <li class="breadcrumb-item active">Update</li>
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
    <form action="{{ route('admin.dealer.update', $model->uuid) }}" method="post" id="form"
        class="form needs-validation" novalidate enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-1">
                            <label for="" class="form-label">Dealer Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title"
                                value="{{ old('title', $model->title) }}" required>
                        </div>
                        <div class="mb-1">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" id="image" class="form-control" value="">
                            @if (!empty($model->image) && file_exists('storage/thumbs/' . $model->image))
                                <div class="m-1 image-preview">

                                    <img class="round" src="{{ asset('storage/thumbs/' . $model->image) }}" height="100"
                                        width="100" alt="{{ $model->title }}" />
                                    <a href="#" class="btn btn-sm btn-icon btn-danger btn-shadow btn-delete"
                                        data-action="{{ route('admin.dealer.destroy-image', $model->id) }}"
                                        data-type="image"><i data-feather='trash'></i></a>
                                </div>
                            @endif
                        </div>
                        <div class="mb-1">
                            <label for="" class="form-label">Description</label>
                            <textarea class="form-control editor" name="description" id="description">
                            {{ old('description', $model->description) }}
                        </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-1">
                            <label for="" class="form-label">Address</label>
                            <input type="text" name="address" id="address" class="form-control"
                                value="{{ old('address') }}">
                        </div>

                        <div class="mb-1">
                            <label for="" class="form-label">Email</label>
                            <input type="text" name="email" id="email" class="form-control"
                                value="{{ old('email') }}">
                        </div>
                        <div class="mb-1" id="append_contact_trigger">
                            <label for="" class="form-label">Contact Number</label>
                            @foreach (json_decode($model->contact) as $contact)
                                <div class="row">
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="contact[]"
                                            value="{{ $contact }}">
                                    </div>
                                    @if ($loop->first)
                                        <div class="col-md-3">
                                            <button type="button"
                                                class="btn btn-primary btn-icon btn-outline-primary waves-effect contact_trigger_add">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-plus">
                                                    <line x1="12" y1="5" x2="12" y2="19">
                                                    </line>
                                                    <line x1="5" y1="12" x2="19" y2="12">
                                                    </line>
                                                </svg>
                                            </button>
                                        </div>
                                    @else
                                        <div class="col-md-3">
                                            <button type="button"
                                                class="btn btn-danger btn-icon btn-outline-primary waves-effect contact_trigger_remove">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-minus">
                                                    <line x1="5" y1="12" x2="19" y2="12">
                                                    </line>
                                                </svg>
                                            </button>
                                        </div>
                                    @endif

                                </div>
                            @endforeach

                        </div>
                        <div class="form-check form-switch">
                            <input type="checkbox" name="status" class="form-check-input" id="status"
                                value="{{ ConstantHelper::STATUS_ACTIVE }}"
                                {{ old('status', $model->status) == ConstantHelper::STATUS_ACTIVE ? 'checked' : '' }}>
                            <label class="form-check-label" for="status">Publish ?</label>
                        </div>
                        <div class="divider divider-dashed">
                            <div class="divider-text"></div>
                        </div>
                        <button class="btn btn-success waves-effect full-width" type="submit"><i
                                data-feather='save'></i>
                            Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
