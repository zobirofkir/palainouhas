@extends('layouts.app')

@section('title', 'User Management')

@section('content')
    <div class="container position-absolute top-50 start-50 translate-middle">
        <!-- Page Header -->
        <div class="d-flex justify-content-between align-items-center mt-5 mb-4">
            <h1 class="text-center">Users Management</h1>
            <!-- Create User Button -->
            <a href="{{ route('admin.users.create') }}" class="btn btn-success btn-lg">
                <i class="fa fa-user-plus"></i> Create New User
            </a>
        </div>

        <!-- Users Table -->
        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <!-- Edit Button -->
                                <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-warning me-2">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <!-- Delete Form Button -->
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination (if needed) -->
        <div class="d-flex justify-content-center mt-4">
            {{ $users->links() }}
        </div>
    </div>
@endsection
