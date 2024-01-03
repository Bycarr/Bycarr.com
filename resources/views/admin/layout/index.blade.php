@extends('admin.layouts.app')
@section('title', 'Layout Option')

@section('scripts')

@endsection
@section('breadcrumb')
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Layout Option</h2>
                <div class="breadcrumb-wrapper float-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Manage</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    @include('admin.layouts.inc.alert')
    <form action="{{ route('admin.layout-option.store') }}" method="post" id="form" class="form needs-validation"
        novalidate enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="row">
                    {{-- <div class="col-3 col-md-2">
                        <ul class="nav flex-column nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="#left-tab1" data-toggle="tab" aria-expanded="true">
                                    <span class="nav-icon"><i class="la la-cog"></i></span>
                                    <span class="nav-text">General</span>
                                </a>
                            </li>
                        </ul>
                    </div> --}}
                    <div class="col-9 col-md-10">
                        <div class="card card-custom gutter-b">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane has-padding active" id="left-tab1">
                                        @foreach ($options as $option)
                                            @if ($option->type == 1)
                                                <div class="form-group mb-1 col-md-6">
                                                    <label for="" class="form-label">{{ $option->title }}</label>

                                                    <select name="{{ $option->id }}" class="form-control">
                                                        <option value="">Select menu</option>
                                                        @foreach ($menus as $menu)
                                                            <option value="{{ $menu->id }}"
                                                                {{ $menu->id == $option->menu_id ? 'selected' : '' }}>
                                                                {!! $menu->title !!}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-success waves-effect" type="submit"><i data-feather='save'></i>
                                    Save</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
