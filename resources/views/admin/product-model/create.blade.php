@extends('admin.layouts.app')
@section('title', 'Add Inventory')

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#item_from').trigger('change');
        });

        function changeItemFrom(event) {

            var from = event.value;
            if (from == 'Purchase') {
                $('.purchase_date').removeClass('d-none');
                $('.purchase_date').removeAttr("disabled");
                $('.unit_purchase_cost').removeClass('d-none');
                $('.unit_purchase_cost').removeAttr("disabled");

            } else {
                $('.purchase_date').addClass('d-none');
                $('.purchase_date').attr("disabled", 'disabled');
                $('.unit_purchase_cost').addClass('d-none');
                $('.unit_purchase_cost').attr("disabled",'disabled');
            }
        }
    </script>
@endsection
@section('breadcrumb')
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Inventory</h2>
                <div class="breadcrumb-wrapper float-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.inventory.index') }}">Inventory</a></li>
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
    <form action="{{ route('admin.inventory.store') }}" method="post" id="form" class="form needs-validation"
        novalidate enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-1">
                            <label for="" class="form-label">Item Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}" required>
                        </div>
                        <div class="mb-1">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" id="image" class="form-control" value="">
                        </div>
                        <div class="mb-1">
                            <label for="attachment" class="form-label">Attachment</label>
                            <input type="file" name="attachment" id="attachment" class="form-control" value="">
                        </div>
                        <div class="mb-1">
                            <label for="" class="form-label">Description</label>
                            <textarea class="form-control editor" name="description" id="description">
                            {{ old('description') }}
                        </textarea>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-1">
                            <label for="" class="form-label">Item From <span class="text-danger">*</span></label>
                            <select name="item_from" id="item_from" required class="form-control select2" onchange="changeItemFrom(this)">
                                <option value="">Select Item From</option>
                                <option value="Purchase" {{ old('item_from') == 'Purchase' ? 'selected' : '' }}>Purchase
                                </option>
                                <option value="Headoffice" {{ old('item_from') == 'Headoffice' ? 'selected' : '' }}>Headoffice
                                </option>
                            </select>
                        </div>

                        <div class="mb-1">
                            <label for="" class="form-label">Quantity <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="quantity" value="{{ old('quantity') }}"
                                required>
                        </div>
                        <div class="mb-1 d-none unit_purchase_cost">
                            <label for="" class="form-label">Unit Purchase Cost <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control unit_purchase_cost" name="unit_purchase_cost"
                                value="{{ old('unit_purchase_cost') }}" required>
                        </div>
                        <div class="mb-1 purchase_date d-none">
                            <label for="" class="form-label">Purchase Date <span
                                    class="text-danger">*</span></label>
                            <input type="date" class="form-control purchase_date" name="purchase_date"
                                value="{{ old('purchase_date') }}" required>
                        </div>
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
