@extends('admin.layouts.app')
@section('title', 'Add Product')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/css/bs-stepper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vuexy/css/form-wizard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vuexy/css/dropify.min.css') }}" rel="stylesheet">
    <style>
        img,
        .img {
            height: 100px;
            width: 100px;
            margin: 10px;
        }

        .upload__image .image__action {
            background-color: #007bff;
            padding: 9px 20px;
            color: white;
            font-weight: 800;
            border-radius: 20px;
            box-shadow: 0px 2px 11px #9d95a4;
        }
    </style>
@endsection
@section('scripts')
    <script src="{{ asset('/vuexy/vendors/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('/vuexy/vendors/select2/form-select2.min.js') }}"></script>
    <script src="{{ asset('/vuexy/js/bs-stepper.min.js') }}"></script>
    <script src="{{ asset('/vuexy/js/form-wizard.js') }}"></script>
    <script src="{{ asset('/vuexy/js/dropify.min.js') }}"></script>
    <script>
        $(function() {
            $('#product_category_id').change(function() {
                var category = $(this).children("option:selected").val();
                var uri = "{{ route('admin.get-attribute', ':category') }}";
                uri = uri.replace(":category", category);
                $.ajax({
                    url: uri,
                    type: 'get',
                    dataType: 'json',
                    success: function(response) {
                        var html = response.html;
                        $("#attributes").html("");
                        $("#attributes").html(html);
                    },
                    error: function(xhr, status, error) {
                        // var err = JSON.parse(xhr.responseText);
                        // alert(err.Message);
                    }
                });
            })
            $('#product_brand_id').change(function() {
                var brand = $(this).children("option:selected").val();
                getModel(brand);
            })

            function getModel(brand) {
                var uri = "{{ route('admin.get-model', ':brand') }}";
                uri = uri.replace(":brand", brand);
                $.ajax({
                    url: uri,
                    type: 'get',
                    dataType: 'json',
                    success: function(response) {
                        var models = response.models;
                        modelSelect(models);
                    },
                    error: function(xhr, status, error) {
                        // var err = JSON.parse(xhr.responseText);
                        // alert(err.Message);
                        document.getElementById('product_model_id').innerHTML = '';
                        $("#product_model_id").append(
                            '<option value="">Select Model</option>');
                    }
                });
            }

            function modelSelect(models) {
                document.getElementById('product_model_id').innerHTML = '';
                $("#product_model_id").append(
                    '<option value="">Select Model</option>');
                if (models) {
                    models.forEach(function(item) {
                        $('#product_model_id').append($("<option/>", {
                            value: item.id,
                            text: item.title,
                            selected: "{{ old('product_model_id') }}" ==
                                item.id ? true : false,
                        }));
                    });
                }
            }

        });
        $(document).ready(function() {
            $('#product_brand_id').trigger('change');
            $('#product_category_id').trigger('change');
            $('.dropify').dropify();
        });
        $(function() {
            var imagesPreview = function(input, placeToInsertImagePreview) {
                var images = $('.gallery')

                if (input.files) {
                    var filesAmount = input.files.length;
                    var fp = $("#gallery-photo-add");
                    var items = fp[0].files;
                    var fileSize = 0;
                    const dt = new DataTransfer()
                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                        fileSize = fileSize + items[i].size;
                        if (fileSize > 1000000) {
                            $('#image-error').html("");
                            $('#image-error').removeClass("d-none");
                            $('#image-error').addClass("alert alert-danger flash_messsage");
                            $('#image-error').append(
                                'Some selected image size is greater than 1000 KB, so it is removed');
                        } else {
                            dt.items.add(input.files[i])
                            $('#image-error').addClass("d-none");

                            reader.onload = function(event) {

                                images.prepend('<div class="img" style="background-image: url(\'' +
                                    event.target.result +
                                    '\'); background-size: cover ; background-position: center;" rel="' +
                                    event.target.result +
                                    '"></div>')

                            }
                            reader.readAsDataURL(input.files[i]);

                        }

                    }
                    input.onchange = null;
                    input.files = dt.files;
                }

            };
            var mainImagesPreview = function(input, placeToInsertImagePreview) {
                var mainImagePreview = $('#main_image_preview')
                if (input.files) {
                    var filesAmount = input.files.length;
                    var fp = $("#image");
                    var items = fp[0].files;
                    var fileSize = 0;
                    const dt = new DataTransfer()
                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                        fileSize = fileSize + items[i].size;
                        if (fileSize > 1000000) {
                            $('#image-error').html("");
                            $('#image-error').removeClass("d-none");
                            $('#image-error').addClass("alert alert-danger flash_messsage");
                            $('#image-error').append(
                                'Some selected image size is greater than 1000 KB, so it is removed');
                        } else {
                            dt.items.add(input.files[i])
                            $('#image-error').addClass("d-none");

                            reader.onload = function(event) {

                                mainImagePreview.prepend(
                                    '<div class="img" style="background-image: url(\'' +
                                    event.target.result +
                                    '\'); background-size: cover ; background-position: center;" rel="' +
                                    event.target.result +
                                    '"></div>')

                            }
                            reader.readAsDataURL(input.files[i]);

                        }

                    }
                    input.onchange = null;
                    input.files = dt.files;
                }

            };

            $('#gallery-photo-add').on('change', function() {
                $('.gallery').html("");
                imagesPreview(this, 'div.gallery');
            });

            $('#image').on('change', function() {
                $('#main_image_preview').html("");
                mainImagesPreview(this, 'div#main_image_preview');
            });

        });
    </script>

@endsection
@section('breadcrumb')
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Product</h2>
                <div class="breadcrumb-wrapper float-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.product.index') }}">Product</a></li>
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

    <section class="horizontal-wizard">
        <div class="bs-stepper horizontal-wizard-example">
            <div class="bs-stepper-header" role="tablist">
                <div class="step" data-target="#basic-details" role="tab" id="basic-details-trigger">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">1</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Basic Info</span>
                            <span class="bs-stepper-subtitle">Setup Basic Details</span>
                        </span>
                    </button>
                </div>
                <div class="line">
                    <i data-feather="chevron-right" class="font-medium-2"></i>
                </div>
                <div class="step" data-target="#price-dicount-info" role="tab" id="price-dicount-info-trigger">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">2</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Price & Discount</span>
                            <span class="bs-stepper-subtitle">Add Price Details</span>
                        </span>
                    </button>
                </div>
                <div class="line">
                    <i data-feather="chevron-right" class="font-medium-2"></i>
                </div>
                <div class="step" data-target="#attribute-info" role="tab" id="attribute-info-trigger">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">3</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Attributes</span>
                            <span class="bs-stepper-subtitle">Add Some Attributes</span>
                        </span>
                    </button>
                </div>
                <div class="line">
                    <i data-feather="chevron-right" class="font-medium-2"></i>
                </div>
                <div class="step" data-target="#gallery-info" role="tab" id="gallery-info-trigger">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-box">4</span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">Image & Gallery</span>
                            <span class="bs-stepper-subtitle">Add Product Gallery</span>
                        </span>
                    </button>
                </div>
            </div>
            <form action="{{ route('admin.product.store') }}" method="post" id="form" class="form needs-validation"
                novalidate enctype="multipart/form-data">
                @csrf
                <div class="bs-stepper-content">
                    <div id="basic-details" class="content" role="tabpanel" aria-labelledby="basic-details-trigger">
                        <div class="content-header">
                            <h5 class="mb-0">Basic Details</h5>
                            <small class="text-muted">Enter Product General Details.</small>
                        </div>
                        <div class="mb-1 row">
                            <div class="col-md-8">
                                <label for="" class="form-label">Product Title <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}"
                                    required>

                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">City <span class="text-danger">*</span></label>
                                <select name="city_id" id="city_id" class="form-select select2" required>
                                    <option value="">Select City</option>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}"
                                            {{ old('city_id') == $city->id ? 'selected' : '' }}>
                                            {{ $city->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="mb-1 row">
                            <div class="col-md-4">
                                <label for="" class="form-label">Category <span
                                        class="text-danger">*</span></label>
                                <select name="product_category_id" id="product_category_id"
                                    class="form-select select2 category" required>
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('product_category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Brand <span class="text-danger">*</span></label>
                                <select name="product_brand_id" id="product_brand_id" class="form-select select2"
                                    required>
                                    <option value="">Select Brand</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}"
                                            {{ old('product_brand_id') == $brand->id ? 'selected' : '' }}>
                                            {{ $brand->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Model <span class="text-danger">*</span></label>
                                <select name="product_model_id" id="product_model_id" class="form-select select2"
                                    required>
                                    <option value="">Select Model</option>
                                </select>
                            </div>
                        </div>


                        <div class="mb-1">
                            <label for="" class="form-label">Description</label>
                            <textarea class="form-control editor" name="description" id="description">
                            {{ old('description') }}
                        </textarea>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-outline-secondary btn-prev" disabled>
                                <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                            </a>
                            <a class="btn btn-primary btn-next">
                                <span class="align-middle d-sm-inline-block d-none">Next</span>
                                <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                            </a>
                        </div>
                    </div>
                    <div id="price-dicount-info" class="content" role="tabpanel"
                        aria-labelledby="price-dicount-info-trigger">
                        <div class="content-header">
                            <h5 class="mb-0">Price & Discount Info</h5>
                            <small>Enter Price & Discount Info.</small>
                        </div>
                        <div class="row mb-1">
                            <div class="col-md-4">
                                <label class="form-label" for="price">Product Price <span
                                        class="text-danger">*</span></label>
                                <input type="number" name="price" id="price" class="form-control" required
                                    value="{{ old('price') }}" />
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="discount">Discount (in %)</label>
                                <input type="number" name="discount" id="discount" class="form-control" />
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" for="discount_amount">Discounted Amount</label>
                                <input type="number" name="discount_amount" id="discount_amount"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-md-4">

                                <div class="form-check form-switch">
                                    <input type="checkbox" name="delivery" class="form-check-input" id="delivery"
                                        value="{{ ConstantHelper::STATUS_ACTIVE }}"
                                        {{ old('delivery') == ConstantHelper::STATUS_ACTIVE ? 'checked' : '' }}>
                                    <label class="form-check-label" for="status">Delivery Available ?</label>
                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="form-check form-switch">
                                    <input type="checkbox" name="negotiable" class="form-check-input" id="negotiable"
                                        value="{{ ConstantHelper::STATUS_ACTIVE }}"
                                        {{ old('negotiable') == ConstantHelper::STATUS_ACTIVE ? 'checked' : '' }}>
                                    <label class="form-check-label" for="status">Negotiable Available ?</label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-primary btn-prev">
                                <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                            </a>
                            <a class="btn btn-primary btn-next">
                                <span class="align-middle d-sm-inline-block d-none">Next</span>
                                <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                            </a>
                        </div>
                    </div>
                    <div id="attribute-info" class="content" role="tabpanel" aria-labelledby="attribute-info-trigger">
                        <div class="content-header">
                            <h5 class="mb-0">Attributes</h5>
                            <small>Enter Product Attributes.</small>
                        </div>
                        <div id="attributes">

                        </div>
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-primary btn-prev">
                                <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                            </a>
                            <a class="btn btn-primary btn-next">
                                <span class="align-middle d-sm-inline-block d-none">Next</span>
                                <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                            </a>
                        </div>
                    </div>
                    <div id="gallery-info" class="content" role="tabpanel" aria-labelledby="gallery-info-trigger">
                        <div class="content-header">
                            <h5 class="mb-0">Gallery</h5>
                            <small class="mb-1">Product Images</small>
                            <div class="mb-1 row">
                                <div class="col-md-6">
                                    <label for="image" class="form-label">Main Image <span
                                            class="text-danger">*</span></label>
                                    <input type="file" name="image" id="image" class="form-control"
                                        value="" required accept="image/*">
                                </div>
                                <div class="col-md-6">
                                    <div id="main_image_preview">

                                    </div>
                                </div>

                            </div>
                            <div class=" mb-1 row">
                                <div class="col-md-6 upload__image">
                                    <label for="gallery-photo-add" class="image__action waves-effect "
                                        data-tooltip-top="Upload All Authorities Images ">Click to add more images
                                        <input type="file" class="d-none" name="images[]" id="gallery-photo-add"
                                            accept="image/*" multiple>
                                    </label>
                                </div>
                                <div class="d-none col-md-6" id="image-error"></div>
                                <div class="d-flex justify-content-space-around gallery flex-wrap col-md-12">
                                </div>
                            </div>


                            <div class="d-flex justify-content-between">
                                <a class="btn btn-primary btn-prev">
                                    <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </a>
                                <button class="btn btn-success btn-submit" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </section>

@endsection
