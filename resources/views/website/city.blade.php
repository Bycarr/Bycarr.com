@extends('website.layouts.app')
@section('title', 'City Page')

@section('content')
<nav aria-label="breadcrumb" class="breadcrumb-wrap">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">City</li>
        </ol>
    </div>
</nav>
    <!-- Brand Section  -->
    <section class="brand-section mb">
        <div class="container">
            <div class="main-title">
                <h2>Explore By City</h2>
            </div>
            <div class="row">
                @foreach ($cities as $item)
                    <div class="col-lg-2">
                        <div class="brand-wrap">
                            <a href="{{ route('city.show', $item->slug) }}">
                                <img src="{{ asset('/storage/' . $item->icon) }}" alt="{{ $item->title }}">
                                <span>{{ $item->title }}</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
