@extends('admin.layouts.main')
@section('container')
    <div class="container">
        <h1>Users</h1>
        <a href="{{ route('adminuser.create') }}" class="btn btn-primary">Create User</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('adminuser.show', $user->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('adminuser.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('adminuser.destroy', $user->id) }}" method="POST" style="display:inline-block;">
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
