@extends('admin.layouts.main')

@section('container')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">{{ $title }}</h1>
        </div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ $adminlocation->name }}</p>
            <p><strong>Description:</strong> {{ $adminlocation->description }}</p>
            <p><strong>Open Time:</strong> {{ $adminlocation->open ? \Carbon\Carbon::createFromFormat('H:i:s', $adminlocation->open)->format('H:i') : 'N/A' }}</p>
            <p><strong>Close Time:</strong> {{ $adminlocation->close ? \Carbon\Carbon::createFromFormat('H:i:s', $adminlocation->close)->format('H:i') : 'N/A' }}</p>
            @if ($adminlocation->image)
                <img src="{{ asset('storage/' . $adminlocation->image) }}" alt="Location Image" class="img-fluid" style="max-width: 300px;">
            @else
                <p>No Image</p>
            @endif
        </div>
        <div class="card-footer">
            <a href="{{ route('adminlocations.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection
