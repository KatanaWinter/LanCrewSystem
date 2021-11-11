<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Lan Crew System') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-grid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/default.css') }}" rel="stylesheet">
    <link href="{{ asset('css/default_small.css') }}" rel="stylesheet">

    @yield('css')
</head>

<body>

    <section class="header">
        @include('layouts.partial.topnav')
        @include('layouts.partial.topbanner')
        @include('layouts.partial.toplogo')
        @include('layouts.partial.topnotifications')
        @include('layouts.partial.topuser')
    </section>

    <section class="body">

        <section class="content">
            @yield('content')
        </section>

        @include('layouts.partial.footer')
        @include('layouts.partial.bottom_nav')

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script type="text/javascript" src="{{ asset('js/default.js') }}"></script>

        @yield('scripts')
</body>

</html>
