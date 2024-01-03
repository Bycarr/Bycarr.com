@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('styles')
@endsection
@section('scripts')

@endsection
@section('content')
    <section id="dashboard-ecommerce">
        <div class="row match-height">
            <!-- Statistics Card -->
            <div class="col-xl-12 col-md-6 col-12">
                <div class="card card-statistics">
                    <div class="card-header">
                        <h4 class="card-title">Statistics</h4>

                    </div>
                    <div class="card-body statistics-body">
                        <div class="row">
                            @can('product-list')
                                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                    <div class="d-flex flex-row">
                                        <div class="avatar bg-light-danger me-2">
                                            <div class="avatar-content">
                                                <i data-feather="box" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="my-auto">
                                            <h4 class="fw-bolder mb-0">{{ $product->total }}</h4>
                                            <p class="card-text font-small-3 mb-0">Products</p>
                                        </div>
                                    </div>
                                </div>
                            @endcan
                            @can('booking-list')
                                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                    <div class="d-flex flex-row">
                                        <div class="avatar bg-light-primary me-2">
                                            <div class="avatar-content">
                                                <i data-feather="trending-up" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="my-auto">
                                            <h4 class="fw-bolder mb-0">{{ $booking }}</h4>
                                            <p class="card-text font-small-3 mb-0">Booking</p>
                                        </div>
                                    </div>
                                </div>
                            @endcan

                            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-info me-2">
                                        <div class="avatar-content">
                                            <i data-feather="user" class="avatar-icon"></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="fw-bolder mb-0">{{ $customer }}</h4>
                                        <p class="card-text font-small-3 mb-0">Customers</p>
                                    </div>
                                </div>
                            </div>


                            @can('agent-list')
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="d-flex flex-row">
                                        <div class="avatar bg-light-success me-2">
                                            <div class="avatar-content">
                                                <i data-feather="user" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="my-auto">
                                            <h4 class="fw-bolder mb-0">{{ $agent }}</h4>
                                            <p class="card-text font-small-3 mb-0">Agents</p>
                                        </div>
                                    </div>
                                </div>
                            @endcan

                        </div>
                    </div>
                </div>
            </div>
            <!--/ Statistics Card -->
        </div>

    </section>
@endsection
