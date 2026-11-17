@extends('layouts.app')

@section('title', __('messages.employee_conferences'))

@section('content')
<h1 class="mb-4">{{ __('messages.employee_conferences') }}</h1>

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
                                <a href="{{ route('employee.conferences.show', $conference['id']) }}" class="btn btn-sm btn-primary">{{ __('messages.view') }}</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
