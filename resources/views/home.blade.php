@extends('layouts.app')

@section('title', __('messages.home'))

@section('content')

<div class="dashboard-header">

    <h1>{{ __('messages.system_name') }}</h1>

    <p class="text-muted mb-0">
        {{ __('messages.system_description') }}
    </p>

</div>

<div class="card mb-4">
    <div class="card-body">

        <h5 class="mb-3">
            {{ __('messages.student_information') }}
        </h5>

        <p class="mb-1">
            <strong>{{ __('messages.student') }}:</strong>
            {{ __('messages.student_name') }}
        </p>

        <p class="mb-0">
            <strong>{{ __('messages.group') }}:</strong>
            {{ __('messages.student_group') }}
        </p>

    </div>
</div>

<div class="row g-4">

    <div class="col-md-4">

        <div class="card role-card h-100">

            <div class="card-body">

                <h4>{{ __('messages.client') }}</h4>

                <p class="text-muted">
                    {{ __('messages.client_description') }}
                </p>

                <a href="{{ route('client.conferences.index') }}"
                   class="btn btn-primary">
                    {{ __('messages.open') }}
                </a>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card role-card h-100">

            <div class="card-body">

                <h4>{{ __('messages.employee') }}</h4>

                <p class="text-muted">
                    {{ __('messages.employee_description') }}
                </p>

                <a href="{{ route('employee.conferences.index') }}"
                   class="btn btn-primary">
                    {{ __('messages.open') }}
                </a>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card role-card h-100">

            <div class="card-body">

                <h4>{{ __('messages.administrator') }}</h4>

                <p class="text-muted">
                    {{ __('messages.admin_description') }}
                </p>

                <a href="{{ route('admin.index') }}"
                   class="btn btn-primary">
                    {{ __('messages.open') }}
                </a>

            </div>

        </div>

    </div>

</div>

@endsection