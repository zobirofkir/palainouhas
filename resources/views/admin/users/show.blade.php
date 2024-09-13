@extends('layouts.app')

@section('title', $user->name . ' - User Details')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">User Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $user->name }}</h5>
                <p class="card-text">
                    <strong>Email:</strong> {{ $user->email }}
                </p>
                <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Back to Users</a>
            </div>
        </div>
    </div>
@endsection
