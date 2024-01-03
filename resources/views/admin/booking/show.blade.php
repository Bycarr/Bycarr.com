@extends('admin.layouts.app')
@section('title', 'Booking-' . $model->code)
@section('styles')

@endsection
@section('scripts')

@endsection
@section('breadcrumb')
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">{{ $model->code }}</h2>
                <div class="breadcrumb-wrapper float-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.booking.index') }}">Booking</a></li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    @include('admin.layouts.inc.alert')
    <section class="invoice-preview-wrapper">
        <div class="row invoice-preview">
            <!-- Invoice -->
            <div class="col-xl-9 col-md-8 col-12">
                <div class="card invoice-preview-card">
                    <div class="card-body invoice-padding pb-0">
                        <!-- Header starts -->
                        <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">

                            <div class="mt-md-0 mt-2">
                                <h4 class="invoice-title">
                                    Booking
                                    <span class="invoice-number">#{{ $model->code }}</span>
                                </h4>
                                <div class="invoice-date-wrapper">
                                    <p class="invoice-date-title">Date Booked:
                                        {{ CommonHelper::dateFormat($model->created_at, 6) }}</p>
                                    <p class="invoice-date-title">Booking Status:
                                        {{ CommonHelper::bookingStatus($model->status) }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- Header ends -->
                    </div>

                    <hr class="invoice-spacing" />

                    <!-- Address and Contact starts -->
                    <div class="card-body invoice-padding pt-0">
                        <div class="row invoice-spacing">
                            <div class="col-xl-8 p-1">
                                <h6 class="mb-2">Customer Details:</h6>
                                <h6 class="mb-25">{{ $model->full_name }}</h6>
                                <p class="card-text mb-25">{{ $model->address }}</p>
                                <p class="card-text mb-25">{{ $model->city }}</p>
                                <p class="card-text mb-25">{{ $model->mobile }}</p>
                                <p class="card-text mb-0">{{ $model->email }}</p>
                            </div>
                            <div class="col-xl-4 p-0 mt-xl-0 mt-2">
                                <h6 class="mb-2">Payment Details:</h6>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="pe-1">Discount:</td>
                                            <td><span class="fw-bold">{{ $model->discount }}%</span></td>
                                        </tr>
                                        <tr>
                                            <td class="pe-1">Paid Amount:</td>
                                            <td><span class="fw-bold">Rs.{{ $model->paid_amount }}</span></td>
                                        </tr>
                                        <tr>
                                            <td class="pe-1">Total Amount:</td>
                                            <td><span class="fw-bold">Rs.{{ $model->total_amount }}</span></td>
                                        </tr>
                                        <tr>
                                            <td class="pe-1">Payment Status:</td>
                                            <td>{{ CommonHelper::paymentStatus($model->payment_status) }}</td>
                                        </tr>
                                        <tr>
                                            <td class="pe-1">Payment Method:</td>
                                            <td>{{ $model->payment_method }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Address and Contact ends -->

                    <!-- Invoice Description starts -->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="py-1">Product Description</th>
                                    <th class="py-1">Image</th>
                                    <th class="py-1">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-1">
                                        <div class="mb-1">
                                            {{ $model->product->title }}
                                        </div>
                                        <div class="mb-1">

                                            <span class="badge badge-light-info" title="Code">
                                                {{ $model->product->code }}</span>
                                            <span class="badge badge-light-primary" title="Category">
                                                {{ $model?->product?->category?->title }}</span>
                                            <span class="badge badge-light-secondary" title="Brand">
                                                {{ $model?->product?->brand?->title }}</span>
                                            <span class="badge badge-light-success" title="Model">
                                                {{ $model?->product?->model?->title }}</span>
                                        </div>
                                    </td>
                                    <td class="py-1">
                                        @if (!empty($model->product->image) && file_exists('storage/' . $model->product->image))
                                            <img src="{{ asset('storage/thumbs/' . $model->product->image) }}"
                                                class="img-fluid rounded" style="height:50px">
                                        @endif
                                    </td>
                                    <td class="py-1">
                                        Rs.{{ $model->price }}
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-body invoice-padding pb-0">
                        <div class="row invoice-sales-total-wrapper">
                            <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
                                <p class="card-text mb-0">
                                    <span class="fw-bold">Additional Notes:</span> <span
                                        class="ms-75">{{ $model->additional_info }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Invoice Description ends -->

                    <hr class="invoice-spacing" />
                    <!-- Invoice Note ends -->
                </div>
            </div>
            <!-- /Invoice -->

            <!-- Invoice Actions -->
            <div class="col-xl-3 col-md-4 col-12 invoice-actions mt-md-0 mt-2">
                <div class="card">
                    <div class="card-body">
                        <ul class="timeline">
                            @foreach ($model->logs as $log)
                                <li class="timeline-item">
                                    <span class="timeline-point timeline-point-secondary timeline-point-indicator"></span>
                                    <div class="timeline-event">
                                        <div class="justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                            <h6>{{ $log->title }}</h6>
                                            <span
                                                class="timeline-event-time">{{ CommonHelper::dateFormat($log->created_at) }}</span>
                                        </div>
                                        <p>
                                            {{ @$log->note }}
                                        </p>
                                        @if ($log->value)
                                            <div class="d-flex justify-content-between flex-wrap flex-sm-row flex-column">
                                                @foreach (json_decode($log->value) as $key => $value)
                                                    <div class="mt-sm-0 mt-1">
                                                        <p class="text-muted mb-50">
                                                            {{ ucwords(str_replace('_', ' ', $key)) }}
                                                        </p>
                                                        @if ($key == 'appointment')
                                                            <p class="mb-0">
                                                                {{ date('Y-m-d h:i a', strtotime($value)) }}</p>
                                                        @else
                                                            <p class="mb-0">{{ $value }}</p>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <button class="btn btn-primary w-100 mb-75" data-bs-toggle="modal"
                            data-bs-target="#send-invoice-sidebar">
                            Update Booking
                        </button>
                    </div>
                </div>
            </div>
            <!-- /Invoice Actions -->
        </div>
        <div class="modal modal-slide-in fade" id="send-invoice-sidebar" aria-hidden="true">
            <div class="modal-dialog sidebar-lg">
                <div class="modal-content p-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                    <div class="modal-header mb-1">
                        <h5 class="modal-title">
                            <span class="align-middle">Update Booking</span>
                        </h5>
                    </div>
                    <div class="modal-body flex-grow-1">
                        <form accept="{{ route('admin.booking.update', $model->uuid) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="mb-1">
                                <label for="invoice-from" class="form-label">Select Status</label>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="">Select Status</option>
                                    @if ($model->status == ConstantHelper::BOOKING_STATUS_PENDING)
                                        <option value="{{ ConstantHelper::BOOKING_STATUS_CONFIRMED }}">
                                            Confirmed</option>
                                    @endif
                                    @if ($model->status == ConstantHelper::BOOKING_STATUS_CONFIRMED)
                                        <option value="{{ ConstantHelper::BOOKING_STATUS_PROCESSING }}">
                                            Processing</option>
                                    @endif
                                    @if (
                                        $model->status == ConstantHelper::BOOKING_STATUS_PENDING ||
                                            $model->status == ConstantHelper::BOOKING_STATUS_CONFIRMED ||
                                            $model->status == ConstantHelper::BOOKING_STATUS_PROCESSING)
                                        <option value="{{ ConstantHelper::BOOKING_STATUS_CANCELLED }}">
                                            Cancelled</option>
                                    @endif
                                    @if ($model->status == ConstantHelper::BOOKING_STATUS_PROCESSING)
                                        <option value="{{ ConstantHelper::BOOKING_STATUS_COMPLETED }}">
                                            Completed</option>
                                    @endif
                                    @if (
                                        $model->status == ConstantHelper::BOOKING_STATUS_COMPLETED ||
                                            $model->status == ConstantHelper::BOOKING_STATUS_CANCELLED)
                                        <option value="{{ ConstantHelper::BOOKING_STATUS_COMPLETED }}">
                                            Closed</option>
                                    @endif
                                </select>
                            </div>
                            <div class="mb-1">
                                <label for="invoice-message" class="form-label">Note</label>
                                <textarea name="note" class="form-control" name="invoice-message" id="invoice-message" cols="3"
                                    rows="11" placeholder="Note..."></textarea>
                            </div>
                            <div class="mb-1 d-flex flex-wrap mt-2">
                                <button type="submit" class="btn btn-primary me-1" data-bs-dismiss="modal">Send</button>
                                <button type="button" class="btn btn-outline-secondary"
                                    data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
