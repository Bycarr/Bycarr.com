@extends('website.layouts.app')
@section('title', $content->title)
@section('content')
    <nav aria-label="breadcrumb" class="breadcrumb-wrap">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current='page'>{{ $content->title }}</li>
            </ol>
        </div>
    </nav>
    <section class="general-page mb">
        <div class="container">
            <h1>{{ $content->title }}</h1>
            <p>{!! $content->description !!}</p>
        </div>
    </section>
@endsection
