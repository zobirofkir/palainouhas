@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
    <div class="container position-absolute top-50 start-50 translate-middle">
        <h1 class="text-center mb-4">Edit User</h1>

        <!-- Display validation errors if any -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form for editing a user -->
        <form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="col-md-6 mx-auto">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="password" class="form-label">Password (leave blank to keep current):</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>

            <div class="form-group mb-4">
                <label for="password_confirmation" class="form-label">Confirm Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Update User</button>
            </div>
        </form>
    </div>
@endsection
