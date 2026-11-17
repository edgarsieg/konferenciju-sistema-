@extends('layouts.app')

@section('title', __('messages.users'))

@section('content')
<h1 class="mb-4">{{ __('messages.users') }}</h1>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th>{{ __('messages.name') }}</th>
                        <th>{{ __('messages.surname') }}</th>
                        <th>{{ __('messages.email') }}</th>
                        <th>{{ __('messages.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user['name'] }}</td>
                            <td>{{ $user['surname'] }}</td>
                            <td>{{ $user['email'] }}</td>
                            <td>
                                <a href="{{ route('admin.users.edit', $user['id']) }}" class="btn btn-sm btn-warning">{{ __('messages.edit') }}</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
