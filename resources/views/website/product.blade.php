@extends('website.layouts.app')
@section('title', $product->title)

@section('content')
    <!-- Breadcrumb  -->
    <nav aria-label="breadcrumb" class="breadcrumb-wrap">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                <li class="breadcrumb-item"><a
                        href="{{ route('brand.show', $product->brand->slug) }}">{{ $product->brand->title }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $product->title }}</li>
            </ol>
        </div>
    </nav>
    <!-- Breadcrumb End  -->

    <!-- Details Page -->
    <section class="details-page mb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="details-main">
                        <div class="details-slider">
                            <div id="slider" class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="{{ asset('/storage/' . $product->image) }}" alt="{{ $product->title }}">
                                    </li>
                                    @foreach ($product->images as $image)
                                        <li>
                                            <img src="{{ asset('/storage/' . $image->file) }}" alt="{{ $product->title }}">
                                        </li>
                                    @endforeach


                                </ul>
                            </div>
                            <div id="carousel" class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="{{ asset('/storage/' . $product->image) }}" alt="{{ $product->title }}">
                                    </li>
                                    @foreach ($product->images as $image)
                                        <li>
                                            <img src="{{ asset('/storage/' . $image->file) }}"
                                                alt="{{ $product->title }}">
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="details-info">
                            <div class="details-overview info-pane">
                                <h3>Bike Overview</h3>
                                <div class="details-col">
                                    <p>{!! $product->description !!}</p>
                                </div>
                            </div>
                            <div class="details-specs info-pane">
                                <h3>Features & Specs</h3>
                                <div class="details-col">
                                    <ul>
                                        @foreach ($product->attributes as $attr)
                                            <li>
                                                <span>{{ ucwords(str_replace('_', ' ', $attr->key)) }}</span>
                                                <p>{!! $attr->value !!}</p>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="details-sidebar">
                        <div class="sidebar-col">
                            <h3>{{ $product->title }}</h3>
                            <span><i class="las la-map-marker-alt"></i>{{ $product?->city?->title }}</span>
                            <b><i class="las la-tags"></i> Rs. {{ $product->price }}</b>
                            @if ($product->stock_status == 'In Stock')
                                <div class="btn-bulk">
                                    <a href="{{ route('customer.booking.index', $product->slug) }}">Book Now</a>
                                    {{-- <a href="inquiry.php">Inquiry Now</a> --}}
                                </div>
                            @endif

                            <ul>
                                @if ($product->agent)
                                    <li>
                                        <div class="general-icon">
                                            <i class="las la-user"></i>
                                        </div>
                                        <div class="general-info">
                                            <h4>Owner Name</h4>
                                            <p>{{ $product?->agent?->title }}</p>
                                        </div>
                                    </li>
                                @endif

                                <li>
                                    <div class="general-icon">
                                        <i class="las la-biking"></i>
                                    </div>
                                    <div class="general-info">
                                        <h4>Delivery</h4>
                                        <p>{{ $product->delivery == 1 ? 'Available' : 'Not Available' }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="general-icon">
                                        <i class="las la-hand-holding-usd"></i>
                                    </div>
                                    <div class="general-info">
                                        <h4>Negotiable</h4>
                                        <p>{{ $product->negotiable == 1 ? 'Negotiable' : 'Not Negotiable' }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="general-icon">
                                        <i class="las la-clock"></i>
                                    </div>
                                    <div class="general-info">
                                        <h4>Posted On</h4>
                                        <p>{{ $product->created_at->diffForHumans() }}</p>
                                    </div>
                                </li>
                            </ul>
                            <h6><i class="las la-shield-alt"></i> <b>Guaranteed Buyback:</b> Return this car to us within a
                                tenure of 6, 12 or 18 months at guaranteed prices.</h6>
                        </div>
                        <div class="share">
                            <h3>Share Now: </h3>
                            <ul>
                                <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                <li><a href="#"><i class="lab la-linkedin"></i></a></li>
                                <li><a href="#"><i class="lab la-whatsapp"></i></a></li>
                                <li><a href="#"><i class="lab la-viber"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Details Page End   -->

    <!-- Related Product  -->
    <section class="related-product mb">
        <div class="container">
            <div class="main-title">
                <h2>Similar Products</h2>
                <div class="main-btn">
                    <a href="{{route('product.index')}}">View all <i class="las la-angle-right"></i></a>
                </div>
            </div>
            <div class="row">
                @foreach ($similarProducts as $item)
                    <div class="col-lg-3">
                        <div class="popular-category-wrap">
                            <div class="popular-category-img">
                                <a href="{{ route('product.show', $item->slug) }}">
                                    <img src="{{ asset('/storage/' . $item->image) }}" alt="images">
                                </a>
                                @if (now()->subDays(14)->format('y-m-d') <=
                                        (isset($item->verified_date) ? $item->verified_date->format('y-m-d') : $item->created_at->format('y-m-d')))
                                    <span>New</span>
                                @endif
                            </div>
                            <div class="popular-category-content">
                                <h3><a href="{{ route('product.show', $item->slug) }}">{{ $item->title }}</a></h3>
                                <span><i class="las la-tags"></i> Rs. {{ $item->price }}</span>
                                <div class="btns">
                                    <a href="{{ route('product.show', $item->slug) }}">View Details <i
                                            class="las la-long-arrow-alt-right"></i></a>
                                </div>
                                <div class="popular-location">
                                    <span><i class="las la-map-marker-alt"></i> {{ $item?->city?->title }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Related Product End  -->
@endsection
