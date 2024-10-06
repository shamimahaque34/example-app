<!-- resources/views/pages/create.blade.php -->

@extends('backend.master')

@section('body')
<div class="row mt-5">
    <div class="col-md-12 mx-auto">
        <div class="card">
            <div class="card-header bg-light">
       <h2 >{{ isset($page) ? 'Edit Page' : 'Create Page' }}</h2>
       <a href="{{ route('pages.index') }}" class="btn btn-success btn-sm position-absolute me-5"
       style="right: 0">manage</a></div>

       <div class="card-body">
        <form action="{{ isset($page) ? route('pages.update', $page->id) : route('pages.store') }}" method="POST">
            @csrf
            @if(isset($page))
                @method('PUT')
            @endif


            <div class="row mt-3">
            <div class="form-group">
                <label for="name">Page Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', isset($page) ? $page->title : '') }}" required>
            </div>
            </div>


            <div class="row mt-3">
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control"
                           value="{{ old('slug', isset($page) ? $page->slug : '') }}" required>
                    @error('slug')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>


            <div class="row mt-3">
                <div class="form-group">
                    <label for="content">Page Content</label>
                    <textarea name="content" id="content" rows="5" class="form-control" required>{{ old('content', isset($page) ? $page->content : '') }}</textarea>
                    @error('content')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

        </div>


            

            <button type="submit" class="btn btn-primary">{{ isset($page) ? 'Update' : 'Create' }}</button>
        </form>

        </div>
        </div>
    </div>
</div>

@endsection
