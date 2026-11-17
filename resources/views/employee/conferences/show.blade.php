@extends('layouts.app')

@section('title', $conference['title'])

@section('content')
<div class="card mb-4">
    <div class="card-body">
        <h1>{{ $conference['title'] }}</h1>
        <p>{{ $conference['description'] }}</p>
        <p><strong>{{ __('messages.speakers') }}:</strong> {{ $conference['speakers'] }}</p>
        <p><strong>{{ __('messages.date') }}:</strong> {{ $conference['date'] }}</p>
        <p><strong>{{ __('messages.time') }}:</strong> {{ $conference['time'] }}</p>
        <p><strong>{{ __('messages.address') }}:</strong> {{ $conference['address'] }}</p>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h3>{{ __('messages.registered_clients') }}</h3>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>{{ __('messages.name') }}</th>
                        <th>{{ __('messages.surname') }}</th>
                        <th>{{ __('messages.email') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($conference['clients'] as $client)
                        <tr>
                            <td>{{ $client['name'] }}</td>
                            <td>{{ $client['surname'] }}</td>
                            <td>{{ $client['email'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
