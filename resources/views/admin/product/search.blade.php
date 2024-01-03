@extends('admin.layouts.app')
@section('title', 'Search IMEI or Serial Number')

@section('scripts')
    <script>
        $('.btn-status').on('click', function(e) {
            e.preventDefault();
            var obj = $(this);
            var url = $(this).data('action');
            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to change status!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, continue!',
                cancelButtonText: 'No, keep it.'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "GET",
                        url: url,
                        'dataType': 'json',
                        success: function(response) {
                            if (response.status == 0) {
                                Swal.fire({
                                    title: 'Success',
                                    text: response.message,
                                    icon: 'success',
                                    timer: 2000
                                });
                                if (response.data == true) {
                                    obj.find('.feather').replaceWith(feather.icons['check']
                                        .toSvg());
                                } else {
                                    obj.find('.feather').replaceWith(feather.icons['minus']
                                        .toSvg());
                                }
                            }
                            if (response.status == 1) {
                                Swal.fire({
                                    title: 'Error',
                                    text: response.message,
                                    icon: 'error',
                                    timer: 2000
                                });
                            }

                        },
                        error: function(e) {
                            if (e.responseJSON.message) {
                                Swal('Error', e.responseJSON.message, 'error');
                            } else {
                                Swal('Error',
                                    'Something went wrong while processing your request.',
                                    'error')
                            }
                        }
                    });
                }
            });
        });
    </script>
@endsection
@section('breadcrumb')
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Search</h2>
                <div class="breadcrumb-wrapper float-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Search</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    @include('admin.layouts.inc.alert')
    <section id="knowledge-base-search">
        <div class="row">
            <div class="col-6 mb-2">
                <div class="card knowledge-base-bg text-center"
                    style="background-image: url('{{ asset('images/banner.png') }}')">
                    <div class="card-body">
                        <h3 class="text-primary">Search IMEI/Serial Number</h3>

                        <form class="kb-search-input">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="search"></i></span>
                                <input type="text" class="form-control" name="search" id="searchbar"
                                    placeholder="Write something" required />

                            </div>
                            <button class="btn w-50 btn-primary mt-2">Search</button>

                        </form>
                    </div>
                </div>
            </div>
            @if (isset($product) && request()->has('search'))
                <div class="col-6">
                    <div class="card standard-pricing popular text-center">
                        <div class="card-body">
                            <div class="pricing-badge text-end">
                                <span class="badge rounded-pill badge-light-primary">{{ $product->category->title }}</span>
                            </div>
                            <h3>{{ $product->title }}</h3>

                            <ul class="list-group list-group-circle text-start">
                                <li class="list-group-item"><strong>Model Number: </strong>{{ $product->model->title }}</li>
                                {{-- <li class="list-group-item"><strong>Regional Distributor:
                                    </strong>{{ $product->regional_distributor }}</li>
                                <li class="list-group-item"><strong>Retail Store: </strong>{{ $product->retail_store }}</li> --}}
                                @if (isset($product->is_imei))
                                    <li class="list-group-item"><strong>IMEI 1 Number: </strong>
                                        {{ $product->imei_no_1 }}</li>
                                @endif
                                @if (isset($product->is_imei))
                                    <li class="list-group-item"><strong>IMEI 2 Number: </strong>
                                        {{ $product->imei_no_2 }}</li>
                                @endif
                                <li class="list-group-item"><strong>Serial Number: </strong>
                                    {{ $product->serial_no }}</li>
                                <li class="list-group-item"><strong>Uploaded by: </strong>
                                    {{ $product->company->title ?? $product->createdBy->name }}</li>
                                <li class="list-group-item"><strong>Verification Status: </strong>
                                    <span class="badge {{ $product->is_verified == 1 ? 'bg-danger' : 'bg-success' }}">
                                        {!! $product->is_verified == 1 ? 'Already Financed' : 'Valid' !!}
                                    </span>
                                </li>
                                @if ($product->verified_date)
                                    <li class="list-group-item"><strong>Financed Date: </strong>
                                        {{ CommonHelper::dateFormat($product->verified_date, 1) }}
                                    </li>
                                    <li class="list-group-item"><strong>Verified By: </strong>
                                        {{ $product->verifiedBy->name }}
                                    </li>
                                @endif
                            </ul>
                            @can('product-verify')
                                @if ($product->is_verified == 0)
                                    <form action="{{ route('admin.product-confirm') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->uuid }}">
                                        {{-- <div class="mb-1 row">
                                            <label for="deliver_by" class="col-sm-4 col-form-label"> Delivered Through</label>
                                            <div class="col-sm-8">
                                                <select name="deliver_by" id="" class="form-control" required>
                                                    <option value=""> Select Dealer</option>
                                                    @foreach ($dealers as $dealer)
                                                        <option value="{{ $dealer->id }}">{{ $dealer->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> --}}
                                        <button class="btn w-100 btn-primary mt-2" type="submit">Confirm</button>
                                    </form>
                                @endif
                            @endcan

                        </div>
                    </div>
                </div>
            @elseif (!isset($product) && request()->has('search'))
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <li class="list-group-item"><strong>Verification Status: </strong>
                                <span class="badge bg-danger">
                                    Invalid
                                </span>
                            </li>
                        </div>
                    </div>
                </div>
            @endisset

</section>
@endsection
