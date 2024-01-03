@extends('website.layouts.app')
@section('title', 'Home Page')

@section('content')
    <!-- Slider  -->
    <section class="slider">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($banners as $item)
                    @if (file_exists('storage/' . $item->image) && $item->image != '')
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}">
                        </div>
                    @endif
                @endforeach

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- Slider End  -->

    <!-- Explore Category  -->
    <section class="explore-category mt mb">
        <div class="container">
            <div class="main-title">
                <h2>Explore Bike By Category</h2>
                <div class="main-btn">
                    <a href="{{route('category.index')}}">View all <i class="las la-angle-right"></i></a>
                </div>
            </div>
            <div class="explore-category-carousel">
                <div class="owl-carousel owl-theme" id="explore-category">
                    @foreach ($categories as $item)
                        <div class="item">
                            <div class="explore-category-wrap">
                                <a href="{{ route('category.show', $item->slug) }}">
                                    <div class="explore-img">
                                        <img src="{{ asset('/storage/' . $item->image) }}" alt="{{ $item->title }}">
                                    </div>
                                    <div class="explore-content">
                                        <h3>{{ $item->title }}</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Explore Category End  -->

    <!-- Popular Category  -->
    <section class="popular-category pt pb">
        <div class="container">
            <div class="main-title">
                <h2>Most Popular Products</h2>
                <div class="main-btn">
                    <a href="{{route('product.index')}}">View all <i class="las la-angle-right"></i></a>
                </div>
            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                @foreach ($brands as $item)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="{{ $item->slug }}-tab"
                            data-bs-toggle="tab" data-bs-target="#{{ $item->slug }}-tab-pane" type="button"
                            role="tab" aria-controls="{{ $item->slug }}-tab-pane"
                            aria-selected="true">{{ $item->title }}</button>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content" id="myTabContent">
                @foreach ($brands as $item)
                    <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="{{ $item->slug }}-tab-pane"
                        role="tabpanel" aria-labelledby="{{ $item->slug }}-tab" tabindex="0">
                        <div class="owl-carousel owl-theme popular-categories nav-bars">
                            @foreach ($item->products as $item)
                                <div class="item">
                                    <div class="popular-category-wrap">
                                        <div class="popular-category-img">
                                            <a href="{{ route('product.show', $item->slug) }}">
                                                <img src="{{ asset('/storage/' . $item->image) }}"
                                                    alt="{{ $item->title }}">
                                            </a>
                                            @if (now()->subDays(14)->format('y-m-d') <=
                                                    (isset($item->verified_date) ? $item->verified_date->format('y-m-d') : $item->created_at->format('y-m-d')))
                                                <span>New</span>
                                            @endif
                                        </div>
                                        <div class="popular-category-content">
                                            <h3><a href="{{ route('product.show', $item->slug) }}">{{ $item->title }}</a>
                                            </h3>
                                            <span><i class="las la-tags"></i> Rs. {{ $item->price }}</span>
                                            <div class="btns">
                                                <a href="{{ route('product.show', $item->slug) }}">View Details <i
                                                        class="las la-long-arrow-alt-right"></i></a>
                                            </div>
                                            <div class="popular-location">
                                                <span><i class="las la-map-marker-alt"></i>
                                                    {{ $item?->city?->title }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Popular Category End  -->

    <!-- Latest Section  -->
    <section class="latest-section pt pb mb">
        <div class="container">
            <div class="main-title">
                <h2>Latest Products</h2>
                <div class="main-btn">
                    <a href="{{route('product.index')}}">View all <i class="las la-angle-right"></i></a>
                </div>
            </div>
            <div class="owl-carousel owl-theme" id="latest-bikes">
                @foreach ($latestProducts as $item)
                    <div class="item">
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
    <!-- Latest Section End  -->

    <!-- Brand Section  -->
    <section class="brand-section mb">
        <div class="container">
            <div class="main-title">
                <h2>Most Popular Brands</h2>
                <div class="main-btn">
                    <a href="{{ route('brand.index') }}">View all <i class="las la-angle-right"></i></a>
                </div>
            </div>
            <div class="row">
                @foreach ($brands as $item)
                    <div class="col-lg-2">
                        <div class="brand-wrap">
                            <a href="{{ route('brand.show', $item->slug) }}">
                                <img src="{{ asset('/storage/' . $item->image) }}" alt="{{ $item->title }}">
                                <span>{{ $item->title }}</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Brand Section End  -->

    <!-- Explore Bikes  -->
    <section class="explore-bikes pt pb mb">
        <div class="container">
            <div class="main-title">
                <h2>Explore More Products</h2>
                <div class="main-btn">
                    <a href="{{route('product.index')}}">View all <i class="las la-angle-right"></i></a>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $item)
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
    <!-- Explore Bikes End  -->

    <!-- Popular City  -->
    <section class="popular-city mb">
        <div class="container">
            <div class="main-title">
                <h2>Products Nearby Cities</h2>
                <div class="main-btn">
                    <a href="{{route('city.index')}}">View all <i class="las la-angle-right"></i></a>
                </div>
            </div>
            <div class="location-modal">
                <ul>
                    @foreach ($cities as $item)
                        <li>
                            <a href="{{ route('city.show', $item->slug) }}">
                                <div class="location-icons">
                                    <img src="{{ asset('/storage/' . $item->icon) }}" alt="{{ $item->title }}">
                                </div>
                                <div class="location-list">
                                    <span>{{ $item->title }}</span>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <!-- Popular City End  -->

    <!-- Informtion Section  -->
    <section class="information mb">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="information-wrap">
                        <div class="information-img">
                            <i class="las la-award"></i>
                        </div>
                        <div class="information-content">
                            <span>Nepal's #1</span>
                            <p>Largest Bikes Sale</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="information-wrap">
                        <div class="information-img">
                            <i class="las la-biking"></i>
                        </div>
                        <div class="information-content">
                            <span>Bikes Sale</span>
                            <p>Everyday Bikes Sale</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="information-wrap">
                        <div class="information-img">
                            <i class="las la-tags"></i>
                        </div>
                        <div class="information-content">
                            <span>Affordable Price</span>
                            <p>Stay updated pay less</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="information-wrap">
                        <div class="information-img">
                            <i class="las la-balance-scale"></i>
                        </div>
                        <div class="information-content">
                            <span>Compare Bikes</span>
                            <p>Decode the right Bikes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Information section End  -->
@endsection
