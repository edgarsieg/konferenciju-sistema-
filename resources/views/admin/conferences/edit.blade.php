@extends('layouts.app')

@section('title', __('messages.edit_conference'))

@section('content')
<h1 class="mb-4">{{ __('messages.edit_conference') }}</h1>

<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('admin.conferences.update', $conference['id']) }}">
            @csrf
            @method('PUT')
            @include('admin.conferences._form')
            <button class="btn btn-primary">{{ __('messages.save') }}</button>
        </form>
    </div>
</div>
@endsection
