@extends('layouts.app')

@section('title', __('messages.create_conference'))

@section('content')
<h1 class="mb-4">{{ __('messages.create_conference') }}</h1>

<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('admin.conferences.store') }}">
            @csrf
            @include('admin.conferences._form')
            <button class="btn btn-success">{{ __('messages.create') }}</button>
        </form>
    </div>
</div>
@endsection
