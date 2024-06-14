@extends('admin.layouts.main')
@section('container')
<div class="container">
    <h1>{{ $title }}</h1>
    <a href="{{ route('adminlocations.create') }}" class="btn btn-primary">Add New Location</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Open Time</th>
                <th>Close Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($locations as $location)
            <tr>
                <td>{{ $location->id }}</td>
                <td>{{ $location->name }}</td>
                <td>{{ $location->description }}</td>
                <td>
                    @if ($location->image)
                        <img src="{{ asset('storage/' . $location->image) }}" alt="Location Image" width="100">
                    @else
                        <p>No Image</p>
                    @endif
                </td>
                <td>{{ $location->open ? \Carbon\Carbon::createFromFormat('H:i:s', $location->open)->format('H:i') : 'N/A' }}</td>
                <td>{{ $location->close ? \Carbon\Carbon::createFromFormat('H:i:s', $location->close)->format('H:i') : 'N/A' }}</td>
                <td>
                    <a href="{{ route('adminlocations.show', $location->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('adminlocations.edit', $location->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('adminlocations.destroy', $location->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
