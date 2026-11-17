@extends('layouts.app')

@section('title', __('messages.edit_user'))

@section('content')
<h1 class="mb-4">{{ __('messages.edit_user') }}</h1>

<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('admin.users.update', $user['id']) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">{{ __('messages.name') }}</label>
                <input type="text" name="name" required class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user['name']) }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">{{ __('messages.surname') }}</label>
                <input type="text" name="surname" required class="form-control @error('surname') is-invalid @enderror" value="{{ old('surname', $user['surname']) }}">
                @error('surname')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">{{ __('messages.email') }}</label>
                <input type="email" name="email" required class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user['email']) }}">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-primary">{{ __('messages.save') }}</button>
        </form>
    </div>
</div>
@endsection
