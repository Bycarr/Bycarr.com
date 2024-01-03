@extends('admin.layouts.app')
@section('title', 'Product Category Attributes')

@section('scripts')
    <script>
        $(function() {
            var requiredCheckboxes = $('.attributes :checkbox[required]');
            requiredCheckboxes.change(function() {
                if (requiredCheckboxes.is(':checked')) {
                    requiredCheckboxes.removeAttr('required');
                } else {
                    requiredCheckboxes.attr('required', 'required');
                }
            });
            // $('#my-select').searchableOptionList();
        });
    </script>
@endsection
@section('breadcrumb')
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">{{ $category->title }}</h2>
                <div class="breadcrumb-wrapper float-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Manage</li>
                    </ol>
                </div>
                <div class="float-end">
                    <a href="{{ route('admin.product-category.index') }}">
                        <span class="btn btn-icon btn-primary waves-effect">Back</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    @include('layouts.inc.alert')
    <form action="{{ route('admin.product-category.attribute.store', $category->uuid) }}" method="post" id="form"
        class="form needs-validation" novalidate>
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group attributes row {{ $errors->has('attribute') ? 'has-error' : '' }}">
                            <label for="" class="form-label">Attributes <span class="text-danger">*</span></label>
                            @foreach ($attributes as $attribute)
                                <div class="col-3">
                                    <div class="form-check mb-1">
                                        <input type="checkbox" name="attribute[]"
                                            class="attribute form-check-input {{ $attribute->slug }}"
                                            id="{{ $attribute->slug }}" value="{{ $attribute->id }}" required
                                            {{ in_array($attribute->id, $categoryAttributes) ? 'checked' : '' }} />
                                        <label class="form-check-label"
                                            for="{{ $attribute->slug }}">{{ $attribute->title }}</label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-success waves-effect full-width" type="submit"><i data-feather='save'></i>
                            Save & Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
