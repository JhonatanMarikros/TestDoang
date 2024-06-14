@extends('admin.layouts.main')
@section('container')
<div class="container">
    <h1>{{ $title }}</h1>
    <form action="{{ route('adminlocations.update', $adminlocation->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $adminlocation->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ $adminlocation->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
            @if ($adminlocation->image)
                <img src="{{ asset('storage/' . $adminlocation->image) }}" alt="Location Image" width="100">
            @endif
        </div>
        <div class="form-group">
            <label for="open">Open Time</label>
            <input type="time" name="open" class="form-control" value="{{ $adminlocation->open }}">
        </div>
        <div class="form-group">
            <label for="close">Close Time</label>
            <input type="time" name="close" class="form-control" value="{{ $adminlocation->close }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div
