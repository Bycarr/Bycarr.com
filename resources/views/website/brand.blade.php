@extends('website.layouts.app')
@section('title', 'Brand Page')

@section('content')
<nav aria-label="breadcrumb" class="breadcrumb-wrap">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Brand</li>
        </ol>
    </div>
</nav>
    <!-- Brand Section  -->
    <section class="brand-section mb">
        <div class="container">
            <div class="main-title">
                <h2>Explore By Brand</h2>
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
@endsection
