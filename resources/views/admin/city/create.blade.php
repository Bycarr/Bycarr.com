@extends('admin.layouts.app')
@section('title', 'Add City')

@section('scripts')
    <script src="{{ asset('/vuexy/vendors/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('/vuexy/vendors/select2/form-select2.min.js') }}"></script>

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
                            selected: "{{ old('district_id') }}" ==
                                item.id ? true : false,
                        }));
                    });
                }
            }
        })
        $(document).ready(function() {
            $('#province_id').trigger('change');

        });
    </script>
@endsection
@section('breadcrumb')
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">City</h2>
                <div class="breadcrumb-wrapper float-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.city.index') }}">City</a></li>
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
    <form action="{{ route('admin.city.store') }}" method="post" id="form" class="form needs-validation" novalidate
        enctype="multipart/form-data">
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
                                <label for="icon" class="form-label">Icon</label>
                                <input type="file" name="icon" id="icon" class="form-control" value="">

                            </div>
                        </div>
                        <div class="mb-1 row">
                            <div class="col-md-6">
                                <label for="" class="form-label">Province</label>
                                <select name="province_id" id="province_id" class="form-select select2">
                                    <option value="">Select Province</option>
                                    @foreach ($provinces as $province)
                                        <option value="{{ $province->id }}"
                                            {{ old('province_id') == $province->id ? 'selected' : '' }}>
                                            {{ $province->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">District</label>
                                <select name="district_id" id="district_id" class="form-select select2">
                                    <option value="">Select District</option>

                                </select>
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
