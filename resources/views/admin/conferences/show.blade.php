@extends('layouts.app')

@section('title', $conference['title'])

@section('content')
<div class="card">
    <div class="card-body">
        <h1>{{ $conference['title'] }}</h1>
        <p>{{ $conference['description'] }}</p>
        <hr>
        <p><strong>{{ __('messages.speakers') }}:</strong> {{ $conference['speakers'] }}</p>
        <p><strong>{{ __('messages.date') }}:</strong> {{ $conference['date'] }}</p>
        <p><strong>{{ __('messages.time') }}:</strong> {{ $conference['time'] }}</p>
        <p><strong>{{ __('messages.address') }}:</strong> {{ $conference['address'] }}</p>
    </div>
</div>
@endsection
