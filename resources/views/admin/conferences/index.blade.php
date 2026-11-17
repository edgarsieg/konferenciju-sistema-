@extends('layouts.app')

@section('title', __('messages.conference_management'))

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>{{ __('messages.conferences') }}</h1>
    <a href="{{ route('admin.conferences.create') }}" class="btn btn-success">{{ __('messages.create_conference') }}</a>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th>{{ __('messages.title') }}</th>
                        <th>{{ __('messages.date') }}</th>
                        <th>{{ __('messages.time') }}</th>
                        <th>{{ __('messages.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($conferences as $conference)
                        <tr>
                            <td>{{ $conference['title'] }}</td>
                            <td>{{ $conference['date'] }}</td>
                            <td>{{ $conference['time'] }}</td>
                            <td>
                                <div class="d-flex flex-wrap gap-2">
                                    <a href="{{ route('admin.conferences.show', $conference['id']) }}" class="btn btn-sm btn-primary">{{ __('messages.view') }}</a>
                                    <a href="{{ route('admin.conferences.edit', $conference['id']) }}" class="btn btn-sm btn-warning">{{ __('messages.edit') }}</a>
                                    <form method="POST" action="{{ route('admin.conferences.destroy', $conference['id']) }}" data-confirm-delete data-title="{{ __('messages.delete_confirmation_title') }}" data-text="{{ __('messages.delete_confirmation_text') }}" data-confirm="{{ __('messages.delete') }}" data-cancel="{{ __('messages.cancel') }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger" {{ $conference['date'] < now()->toDateString() ? 'disabled' : '' }}>{{ __('messages.delete') }}</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
