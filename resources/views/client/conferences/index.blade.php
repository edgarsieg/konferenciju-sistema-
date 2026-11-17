@extends('layouts.app')

@section('title', __('messages.conferences'))

@section('content')

<div class="mb-4">
    <h1>{{ __('messages.client_conferences') }}</h1>

    <p class="text-muted mb-0">
        {{ __('messages.client_description') }}
    </p>
</div>

<div class="row g-4">

    @foreach($conferences as $conference)

        <div class="col-md-6 col-xl-4">

            <div class="card conference-card h-100">

                <div class="card-body d-flex flex-column">

                    <div class="conference-card-header">

                        <h4 class="conference-title">
                            {{ $conference['title'] }}
                        </h4>

                        <p class="text-muted">
                            {{ $conference['description'] }}
                        </p>

                    </div>

                    <div class="conference-info">

                        <div>
                            <span class="conference-label">
                                {{ __('messages.date') }}:
                            </span>

                            <span>
                                {{ $conference['date'] }}
                            </span>
                        </div>

                        <div>
                            <span class="conference-label">
                                {{ __('messages.time') }}:
                            </span>

                            <span>
                                {{ $conference['time'] }}
                            </span>
                        </div>

                        <div>
                            <span class="conference-label">
                                {{ __('messages.address') }}:
                            </span>

                            <span>
                                {{ $conference['address'] }}
                            </span>
                        </div>

                    </div>

                    <div class="d-flex gap-3 mt-auto pt-3">

                        <a
                            href="{{ route('client.conferences.show', $conference['id']) }}"
                            class="btn btn-outline-primary"
                        >
                            {{ __('messages.view') }}
                        </a>

                        <form
                            method="POST"
                            action="{{ route('client.conferences.register', $conference['id']) }}"
                            class="m-0"
                        >
                            @csrf

                            <button class="btn btn-success">
                                {{ __('messages.register') }}
                            </button>
                        </form>

                    </div>

                </div>

            </div>

        </div>

    @endforeach

</div>

@endsection