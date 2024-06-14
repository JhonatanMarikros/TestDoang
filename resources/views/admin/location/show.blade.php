@extends('admin.layouts.main')
@section('container')
<div class="container">
    <h1>{{ $title }}</h1>
    <p><strong>Name:</strong> {{ $adminlocation->name }}</p>
    <p><strong>Description:</strong> {{ $adminlocation->description }}</p>
    @if ($adminlocation->image)
        <img src="{{ asset('storage/' . $adminlocation->image) }}" alt="Location Image" width="300">
    @else
        <p>No Image</p>
    @endif
    <a href="{{ route('adminlocations.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
