@extends('admin.layouts.app')
@section('title', 'Edit Content')

@section('scripts')
    <script></script>
@endsection
@section('breadcrumb')
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Content</h2>
                <div class="breadcrumb-wrapper float-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.content.index') }}">Content</a></li>
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
    <form action="{{ route('admin.content.update', $model->uuid) }}" method="post" id="form"
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
                                value="{{ old('title', $model->title) }}" required>
                        </div>
                        <div class="mb-1">
                            <label for="" class="form-label">Excerpt</label>
                            <textarea class="form-control" name="excerpt" id="excerpt" rows="1" cols="50" wrap="physical">
                            {{ old('excerpt', $model->excerpt) }}
                        </textarea>
                        </div>
                        <div class="mb-1">
                            <label for="" class="form-label">Description</label>
                            <textarea class="form-control editor" name="description" id="description">
                            {{ old('description', $model->description) }}
                        </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">

                        <div class="form-check form-switch">
                            <input type="checkbox" name="status" class="form-check-input" id="status"
                                value="{{ ConstantHelper::STATUS_ACTIVE }}"
                                {{ old('status', $model->status) == ConstantHelper::STATUS_ACTIVE ? 'checked' : '' }}>
                            <label class="form-check-label" for="status">Publish ?</label>
                        </div>
                        <div class="divider divider-dashed">
                            <div class="divider-text"></div>
                        </div>
                        <button class="btn btn-success waves-effect full-width" type="submit"><i data-feather='save'></i>
                            Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
