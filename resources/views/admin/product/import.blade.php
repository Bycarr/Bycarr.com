@extends('admin.layouts.app')
@section('title', 'Import Product')

@section('scripts')
    <script src="{{ asset('/vuexy/vendors/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('/vuexy/vendors/select2/form-select2.min.js') }}"></script>
    <script>
        $(function() {
            $('#category').change(function() {
                var category = $(this).children("option:selected").val();
                getModel(category);
            })

            function getModel(category) {
                var uri = "{{ route('admin.get-model', ':category') }}";
                uri = uri.replace(":category", category);
                $.ajax({
                    url: uri,
                    type: 'get',
                    dataType: 'json',
                    success: function(response) {
                        var models = response.models;
                        modelSelect(models);
                    }
                });
            }

            function modelSelect(models) {
                document.getElementById('models').innerHTML = '';

                // console.log(models);
                // document.getElementById('models').innerHTML =
                //     `<option value=''>Select Model</option>` +
                //     models.reduce((tmp, x) =>
                //         `${tmp}<option value='${x.id}'>${x.title} - ${x.code}</option>`, '');
                $("#models").append(
                    '<option value="">Select Model</option>');
                if (models) {
                    models.forEach(function(item) {
                        $('#models').append($("<option/>", {
                            value: item.id,
                            text: item.title + '-' + item.code,
                            selected: "{{ old('product_model_id') }}" ==
                                item.id ? true : false,
                        }));
                    });
                }
            }

        });
        $(document).ready(function() {
            $('#category').trigger('change');

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
                        <li class="breadcrumb-item active">Import</li>
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
    <form action="{{ route('admin.product.postImport') }}" method="post" id="form" class="form needs-validation"
        novalidate enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-1">
                            <label for="" class="form-label">Category <span class="text-danger">*</span></label>
                            <select name="product_category_id" id="category" class="form-select select2 category" required>
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('product_category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-1">
                            <label for="" class="form-label">Model <span class="text-danger">*</span></label>
                            <select name="product_model_id" id="models" class="form-select select2" required>
                                <option value="">Select Model</option>
                            </select>
                        </div>
                        <div class="mb-1">
                            <label for="image" class="form-label">Import File</label>
                            <input type="file" name="file" id="file" class="form-control" value="">
                        </div>
                        <div class="divider divider-dashed">
                            <div class="divider-text"></div>
                        </div>
                        <button class="btn btn-success waves-effect" type="submit"><i data-feather='save'></i>
                            Import</button>
                        <a href="{{ asset('sample/product_import_sample.xlsx') }}" class="btn btn-primary waves-effect"><i
                                data-feather='download'></i>
                            Get Sample Excel File</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
