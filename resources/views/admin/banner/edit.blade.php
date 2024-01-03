@extends('admin.layouts.app')
@section('title', 'Edit Banner')

@section('scripts')
    <script>
        $(function() {
            $('#province_id').change(function() {
                var province = $(this).children("option:selected").val();
                getDistrict(province);
            })

            function getDistrict(province) {
                var uri = "{{ route('admin.get-district-by-province', ':province') }}";
                uri = uri.replace(":province", province);
                $.ajax({
                    url: uri,
                    type: 'get',
                    dataType: 'json',
                    success: function(response) {
                        var districts = response.districts;
                        console.log(districts);
                        districtSelect(districts);
                    },
                    error: function(xhr, status, error) {
                        // var err = JSON.parse(xhr.responseText);
                        // alert(err.Message);
                        document.getElementById('district_id').innerHTML = '';
                        $("#district_id").append(
                            '<option value="">Select District</option>');
                    }
                });
            }

            function districtSelect(districts) {
                document.getElementById('district_id').innerHTML = '';
                $("#district_id").append(
                    '<option value="">Select District</option>');
                if (districts) {
                    districts.forEach(function(item) {
                        $('#district_id').append($("<option/>", {
                            value: item.id,
                            text: item.name,
                            selected: "{{ old('district_id', $model->district_id) }}" ==
                                item.id ? true : false,
                        }));
                    });
                }
            }
        })
        $(document).ready(function() {
            $('#province_id').trigger('change');

        });
        $(document).ready(function() {

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
                                $('.' + imageType + '-wrap').remove();
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
                <h2 class="content-header-title float-start mb-0">Banner</h2>
                <div class="breadcrumb-wrapper float-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.banner.index') }}">Banner</a></li>
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
    <form action="{{ route('admin.banner.update', $model->uuid) }}" method="post" id="form"
        class="form needs-validation" novalidate enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-1">
                            <label for="" class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title"
                                value="{{ old('title', $model->title) }}" required>
                        </div>

                        <div class="mb-1">
                            <label for="" class="form-label">Excerpt</label>
                            <textarea class="form-control" name="excerpt" id="excerpt" rows="1" cols="50" wrap="physical">
                            {{ old('excerpt', $model->excerpt) }}
                        </textarea>
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
                            <label for="image" class="form-label">Image <span class="text-danger">*</span></label>
                            <input type="file" name="image" id="image" class="form-control" value="">

                        </div>
                        @if (file_exists('storage/thumbs/' . $model->image) && $model->image != '')
                            <div class="image-wrap mb-2">
                                <div class="bg-gray-300 my-2 px-3 py-2"><small>Existing Image Preview</small></div>
                                <div class="card card-custom overlay">
                                    <div class="card-body p-0">
                                        <div class="overlay-wrapper">
                                            <img src="{{ asset('storage/' . $model->image) }}" alt=""
                                                class="w-100 rounded" />
                                        </div>
                                        <div class="overlay-layer">
                                            <a href="#" class="btn btn-icon btn-danger btn-shadow btn-delete"
                                                data-action="{{ route('admin.banner.destroy-image', $model->id) }}"
                                                data-type="image"><i data-feather='trash'></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="form-check form-switch">
                            <input type="checkbox" name="status" class="form-check-input" id="status"
                                value="{{ ConstantHelper::STATUS_ACTIVE }}"
                                {{ old('status', $model->status) == ConstantHelper::STATUS_ACTIVE ? 'checked' : '' }}>
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
