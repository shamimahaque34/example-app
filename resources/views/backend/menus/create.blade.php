<!-- resources/views/menus/create.blade.php -->

@extends('backend.master')

@section('body')
<div class="row mt-5">
    <div class="col-md-12 mx-auto">
        <div class="card">
            <div class="card-header bg-light">
       <h2 >{{ isset($menu) ? 'Edit Menu' : 'Create Menu' }}</h2>
       <a href="{{ route('menus.index') }}" class="btn btn-success btn-sm position-absolute me-5"
       style="right: 0">manage</a></div>

       <div class="card-body">
        <form action="{{ isset($menu) ? route('menus.update', $menu->id) : route('menus.store') }}" method="POST">
            @csrf
            @if(isset($menu))
                @method('PUT')
            @endif


            <div class="row mt-3">
            <div class="form-group">
                <label for="name">Menu Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', isset($menu) ? $menu->title : '') }}" required>
            </div>
            </div>


            <div class="row mt-3">
            <div class="form-group">
                <label for="url">Menu URL</label>
                <input type="text" name="url" class="form-control" value="{{ old('url', isset($menu) ? $menu->url : '') }}" required>
            </div>
            </div>


            <div class="row mt-3">
            <div class="form-group">
                <label for="parent_id">Parent Menu (Optional)</label>
                <select name="parent_id" class="form-control">
                    <option value="">None</option>
                    @foreach($menus as $parentMenu)
                        <option value="{{ $parentMenu->id }}" {{ isset($menu) && $menu->parent_id == $parentMenu->id ? 'selected' : '' }}>
                            {{ $parentMenu->title }}
                        </option>
                    @endforeach
                </select>
                <small>Select a parent menu if this is a submenu.</small>
            </div>
            </div>

            <button type="submit" class="btn btn-primary">{{ isset($menu) ? 'Update' : 'Create' }}</button>
        </form>

        </div>
        </div>
    </div>
</div>

@endsection
