@extends('website.layouts.app')
@section('title', $model?->title ?? 'Products')
@section('scripts')
    <script>
        var attributes = {};
        <?php
    foreach ($filters as $key => $value) {
        if (!empty($filters[$key])) { ?>
        attributes.<?= $key ?> = true;
        <?php    }
    }
    ?>
    </script>
    <script>
        $(function() {
            $('.filters').change(function() {
                var currentUrl = window.location.href;
                var newUrl = currentUrl;
                var filterAttributes = {};
                for (const key in attributes) {

                    var result = $('.list_' + key + '_filter:checkbox:checked').map(function() {
                        return this.value;
                    }).get();
                    if (result.length > 0) {
                        filterAttributes[key] = result;
                    }
                    var url = new URL(newUrl);
                    if (url.searchParams && url.searchParams.toString()) {
                        url.searchParams.delete(key);
                    }
                    newUrl = url.href;
                    console.log(newUrl);


                }

                for (const [index, [key, value]] of Object.entries(Object.entries(filterAttributes))) {

                    var pattern = new RegExp('([?&])' + key + '=');
                    var url = new URL(newUrl);
                    if (pattern.test(newUrl)) {
                        url.searchParams.set(key, value);
                        newUrl = url.href;
                    } else {
                        if (url.searchParams && url.searchParams.toString()) {
                            newUrl = newUrl + `&${key}=${value}`;
                        } else {
                            newUrl = newUrl + `?${key}=${value}`;
                        }
                    }
                    // console.log(`${index}: ${key} = ${value}`);
                }
                // console.log(newUrl);
                window.location.href = newUrl;
            })
            $('.brand_filter').change(function() {
                var brand = $('.list_brand_filter:checkbox:checked').map(function() {
                    return this.value;
                }).get();
                if (brand) {
                    var currentUrl = window.location.href;
                    var urlParams = new URLSearchParams(currentUrl);
                    var pattern = new RegExp('([?&])' + 'brand' + '=');
                    var newUrl;
                    var url = new URL(currentUrl);
                    if (pattern.test(currentUrl)) {
                        url.searchParams.set('brand', brand);
                        newUrl = url.href;
                        window.location.href = newUrl;
                    } else {
                        if (url.searchParams && url.searchParams.toString()) {
                            newUrl = currentUrl + '&brand=' + brand;
                        } else {
                            newUrl = currentUrl + '?brand=' + brand;
                        }
                        window.location.href = newUrl;
                    }
                }

            })
            $('#sort').change(function() {
                var sort = $(this).children("option:selected").val();
                if (sort) {
                    var currentUrl = window.location.href;
                    var urlParams = new URLSearchParams(currentUrl);
                    var pattern = new RegExp('([?&])' + 'sort' + '=');
                    var newUrl;
                    var url = new URL(currentUrl);
                    if (pattern.test(currentUrl)) {
                        url.searchParams.set('sort', sort);
                        newUrl = url.href;
                        window.location.href = newUrl;
                    } else {
                        if (url.searchParams && url.searchParams.toString()) {
                            newUrl = currentUrl + '&sort=' + sort;
                        } else {
                            newUrl = currentUrl + '?sort=' + sort;
                        }
                        window.location.href = newUrl;
                    }
                }

            })
            $(".price-range").on("change", function() {
                var $inp = $(this);
                var from = $inp.data("from"); // get data from attribute
                var to = $inp.data("to"); // get data from attribute
                if (from && to) {
                    var currentUrl = window.location.href;
                    var urlParams = new URLSearchParams(currentUrl);
                    var pattern = new RegExp('([?&])' + 'price' + '=');
                    var newUrl;
                    var url = new URL(currentUrl);
                    if (pattern.test(currentUrl)) {
                        url.searchParams.set('price', from + '-' + to);
                        newUrl = url.href;
                        window.location.href = newUrl;
                    } else {
                        if (url.searchParams && url.searchParams.toString()) {
                            newUrl = currentUrl + '&price=' + from + '-' + to;
                        } else {
                            newUrl = currentUrl + '?price=' + from + '-' + to;
                        }
                        window.location.href = newUrl;
                    }
                }
                console.log(from, to);
            })
        })
        $(document).ready(function() {
            $(".price-range").ionRangeSlider({
                type: "double",
                grid: true,
                min: 0,
                max: "{{ !empty($prices) ? max($prices) : 0 }}",
                from: "{{ !empty($prices) ? min($prices) : 0 }}",
                to: "{{ !empty($prices) ? max($prices) : 0 }}",
                prefix: "Rs.",

            });

        });
    </script>
@endsection
@section('content')
    <!-- Breadcrumb  -->
    <nav aria-label="breadcrumb" class="breadcrumb-wrap">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $model?->title ?? 'Products' }}</li>
            </ol>
        </div>
    </nav>
    <!-- Breadcrumb End  -->

    <!-- Category Page -->
    <section class="category-page mb">
        <div class="container">
            <div class="category-head">
                <h3>{{ $model?->title ?? 'Products' }} ({{ $products->total() }} items)</h3>
                <div class="views">
                    <div class="sort">
                        <span>Sort By: </span>
                        <select class="form-select form-control" id="sort">
                            <option value="">Sort By</option>
                            <option value="price_low_to_high"
                                {{ request()->has('sort') && request()->sort == 'price_low_to_high' ? 'selected' : '' }}>
                                Price Low To High</option>
                            <option value="price_high_to_low"
                                {{ request()->has('sort') && request()->sort == 'price_high_to_low' ? 'selected' : '' }}>
                                Price High To Low</option>
                            <option value="product_new_to_old"
                                {{ request()->has('sort') && request()->sort == 'product_new_to_old' ? 'selected' : '' }}>
                                Product New To Old</option>
                            <option value="product_old_to_new"
                                {{ request()->has('sort') && request()->sort == 'product_old_to_new' ? 'selected' : '' }}>
                                Product Old To New</option>
                        </select>
                    </div>
                    <div class="list-grid">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                    type="button" role="tab" aria-controls="home" aria-selected="true"><i
                                        class="las la-border-all"></i> Grid</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false"><i
                                        class="las la-list"></i> List</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="category-sidebar">
                        <h2>Filters</h2>
                        @if (isset($brands))
                            <div class="filter-list">
                                <h3><i class="las la-tags"></i> Brand</h3>
                                <ul>
                                    @foreach ($brands as $brand)
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input list_brand_filter brand_filter"
                                                    type="checkbox" value="{{ $brand->id }}"
                                                    {{ request()->has('brand') ? (in_array($brand->id, explode(',', request()->brand)) ? 'checked' : '') : '' }}>
                                                <label class="form-check-label">
                                                    {{ ucwords($brand->title) }}
                                                </label>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        @endif
                        @foreach ($filters as $key => $values)
                            <div class="filter-list">
                                <h3><i class="las la-tachometer-alt"></i> {{ ucwords(str_replace('_', ' ', $key)) }}</h3>
                                <ul>
                                    @foreach ($values as $value)
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input list_{{ $key }}_filter filters"
                                                    type="checkbox" value="{{ $value }}"
                                                    {{ request()->has($key) ? (in_array($value, explode(',', request()->$key)) ? 'checked' : '') : '' }}>
                                                <label class="form-check-label">
                                                    {{ ucwords($value) }}
                                                </label>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        @endforeach
                        @if (!empty($prices))
                            <div class="filter-list">
                                <h3><i class="las la-hand-holding-usd"></i> Price</h3>
                                <div class="price-filter">
                                    <input type="text" class="price-range" name="my_range" value="">
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="category-main">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="row">
                                    @foreach ($products as $item)
                                        <div class="col-lg-4 col-md-6 col-sm-6">
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
                                                    <h3><a
                                                            href="{{ route('product.show', $item->slug) }}">{{ $item->title }}</a>
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
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    @foreach ($products as $item)
                                        <div class="col-md-6">
                                            <div class="list-product-wrap">
                                                <div class="list-product-media">
                                                    <a href="{{ route('product.show', $item->slug) }}"><img
                                                            src="{{ asset('storage/' . $item->image) }}"
                                                            alt="{{ $item->price }}"></a>
                                                </div>
                                                <div class="list-product-content">
                                                    <h3><a href="{{ route('product.show', $item->slug) }}">{{ $item->title }}
                                                        </a></h3>
                                                    <p>
                                                        {{ $item->excerpt }}
                                                    </p>
                                                    <div class="price">
                                                        <span><i class="las la-tags"></i> Rs. {{ $item->price }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            {{ $products->links('vendor.pagination.custom') }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Page End -->
@endsection
