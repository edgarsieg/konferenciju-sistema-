<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', __('messages.system_name'))</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<div class="app-wrapper">

    <aside class="sidebar">

        <nav class="sidebar-nav">

            <a href="{{ route('home') }}"
               class="{{ request()->routeIs('home') ? 'active' : '' }}">
                {{ __('messages.home') }}
            </a>

            <a href="{{ route('client.conferences.index') }}"
               class="{{ request()->routeIs('client.*') ? 'active' : '' }}">
                {{ __('messages.client') }}
            </a>

            <a href="{{ route('employee.conferences.index') }}"
               class="{{ request()->routeIs('employee.*') ? 'active' : '' }}">
                {{ __('messages.employee') }}
            </a>

            <a href="{{ route('admin.index') }}"
               class="{{ request()->routeIs('admin.*') ? 'active' : '' }}">
                {{ __('messages.administrator') }}
            </a>

        </nav>

    </aside>

    <div class="main-content">

        <header class="topbar">

            <div class="topbar-title">
                {{ __('messages.system_name') }}
            </div>

            <div class="topbar-user">
                <span>{{ __('messages.demo_user') }}</span>

                <button class="btn btn-outline-secondary btn-sm" disabled>
                    {{ __('messages.logout') }}
                </button>
            </div>

        </header>

        <main class="page-content">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @yield('content')

        </main>

    </div>

</div>

<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>