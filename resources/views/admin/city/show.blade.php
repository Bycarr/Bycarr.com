@extends('admin.layouts.app')
@section('title', 'Inventory')

@section('scripts')

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
                        <li class="breadcrumb-item active">Asset</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('content')
    @include('admin.layouts.inc.alert')

    <div class="card">
        <div class="card-body">
            <div class="row my-2">
                <div class="col-12 col-md-8">
                    <h4>{{ $inventory->title }}</h4>
                    @if ($inventory->unit_purchase_cost > 0)
                        <p class="card-text">Unit Purchase Cost - <span
                                class="text-success">{{ $inventory->unit_purchase_cost }}</span></p>
                    @endif

                    <p class="card-text">Quantity - <span class="text-success">{{ $inventory->quantity }}</span></p>
                    @if (isset($inventory->purchase_date))

                    <p class="card-text">Purchased Date - <span
                            class="text-success">{{ CommonHelper::dateFormat($inventory->purchase_date, 1) }}</span></p>
                            @endif
                    @if (!empty($inventory->attachment) && file_exists('storage/' . $inventory->attachment))
                        <p class="card-text">Attachment - <span class="text-success">
                                <a href="{{ asset('storage/' . $inventory->attachment) }}"
                                    class="btn btn-icon btn-outline-primary waves-effect" data-bs-toggle="tooltip"
                                    data-bs-original-title="Download Attachment">
                                    <i data-feather='file'></i>
                                </a>
                            </span>
                        </p>
                    @endif
                    <p class="card-text">
                        {!! $inventory->description !!}
                    </p>
                </div>
                <div class="col-12 col-md-4 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                    @if (!empty($inventory->image) && file_exists('storage/' . $inventory->image))
                        <div class="d-flex align-items-center justify-content-center">
                            <a data-bs-toggle="modal" data-bs-target="#imagepopup">
                                <img src="{{ asset('storage/' . $inventory->image) }}" class="img-fluid product-img"
                                    alt="product image" />
                            </a>

                        </div>
                    @endif

                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th width="5%">#</th>
                        <th width=5%>Asset ID</th>
                        <th width="20%">Item Name</th>
                        <th width="30%">Description</th>
                        <th class="text-center" width="20%">Status</th>
                        <th width="30%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $index = $assets->firstItem(); @endphp
                    @foreach ($assets as $key => $data)
                        <tr>
                            <td>{{ $index + $key }}</td>
                            <td>{{ $data->asset_id }}</td>
                            <td>{{ $data->title }}</td>
                            <td>{!! Str::limit($data->description, 100) !!}</td>

                            <td class="text-center">
                                <button class="btn btn-icon btn-outline-success btn-status waves-effect">
                                    <span class="">
                                        @if ($data->status == 1)
                                            On Store
                                        @elseif ($data->status == 2)
                                            Damage
                                        @elseif ($data->status == 3)
                                            Disposed
                                        @endif
                                    </span>
                                </button>
                            </td>
                            <td>
                                @can('user-access-policy.perform', ['inventory', 'view'])
                                    <a href="{{ route('admin.inventory.asset.index', ['inventory' => $inventory->inventory_id, 'asset' => $data->inventory_asset_id]) }}"
                                        class="btn btn-icon btn-outline-primary waves-effect" data-bs-toggle="tooltip"
                                        data-bs-original-title="Details"><i data-feather='eye'></i></a>
                                @endcan
                                <a href="{{ route('admin.inventory.asset.edit', ['inventory' => $inventory->inventory_id, 'asset' => $data->inventory_asset_id]) }}"
                                    class="btn btn-icon btn-outline-info waves-effect" data-bs-toggle="tooltip"
                                    data-bs-original-title="Details"><i data-feather='edit-2'></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $assets->appends(request()->query())->links('admin.layouts.inc.pagination') }}

    <div class="modal fade" id="imagepopup" tabindex="-1" aria-labelledby="shareProjectTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body  text-center">
                    <img src="{{ asset('storage/' . $inventory->image) }}"
                    height="100%" width="100%" alt="{{ $data->title }}" />
                </div>
            </div>
        </div>
    </div>
@endsection
