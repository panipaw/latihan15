<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $pageTitle }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss'])
</head>
<body>
    @include('layouts.nav')
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
        @vite('resources/js/app.js')
    </div>
</body>
</html>
