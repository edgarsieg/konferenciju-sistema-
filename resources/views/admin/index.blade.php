@extends('layouts.app')

@section('title', __('messages.administrator'))

@section('content')
<h1 class="mb-4">{{ __('messages.admin_panel') }}</h1>

<div class="row g-4">
    <div class="col-md-6">
        <div class="card h-100">
            <div class="card-body">
                <h4>{{ __('messages.user_management') }}</h4>
                <p>{{ __('messages.user_management_description') }}</p>
                <a href="{{ route('admin.users.index') }}" class="btn btn-primary">{{ __('messages.open') }}</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card h-100">
            <div class="card-body">
                <h4>{{ __('messages.conference_management') }}</h4>
                <p>{{ __('messages.conference_management_description') }}</p>
                <a href="{{ route('admin.conferences.index') }}" class="btn btn-primary">{{ __('messages.open') }}</a>
            </div>
        </div>
    </div>
</div>
@endsection
