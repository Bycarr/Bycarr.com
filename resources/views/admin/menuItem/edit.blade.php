@extends('admin.layouts.app')
@section('title', 'Edit Menu Item')

@section('scripts')
    <script>
    </script>
@endsection
@section('breadcrumb')
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Menu Item</h2>
                <div class="breadcrumb-wrapper float-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.menu.index') }}">Menu</a></li>
                        <li class="breadcrumb-item active">Update</li>
                    </ol>
                </div>
                <div class="float-end">

                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    @include('layouts.inc.alert')
    <form action="{{ route('admin.menu.menu-item.update', ['menu' => $menu->uuid,'menu_item' => $menuItem->id]) }}" method="post" id="form"
        class="form needs-validation" novalidate enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-1">
                            <label for="" class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title"
                                value="{{ old('title', $menuItem->title) }}" required>
                        </div>
                        <div class="mb-1">
                            <label for="" class="form-label">Link <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="link_url"
                                value="{{ old('link_url', $menuItem->link_url) }}" required>
                        </div>
                        <div class="mb-1">
                            <div class="checkbox-inline">
                                <label class="checkbox checkbox-lg">
                                    <input type="checkbox" name="is_external" value="1" {{ old('is_external') == 1 || $menuItem->is_external == true ? 'checked': '' }}>
                                    <span></span>Is External Link</label>
                            </div>
                        </div>

                        <div class="mb-1">
                            <div class="checkbox-inline">
                                <label class="checkbox checkbox-lg">
                                    <input type="checkbox" name="link_target" value="1" {{ old('link_target') == 1 || $menuItem->link_target == true ? 'checked': '' }}>
                                    <span></span>Open In New tab</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-success waves-effect full-width" type="submit"><i
                                data-feather='save'></i>
                            Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
