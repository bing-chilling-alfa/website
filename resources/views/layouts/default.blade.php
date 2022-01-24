<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bing Chilling</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>

<body>
    <div class="relative d-flex flex-column mw-100 min-vh-100 bg-light">
        {{ View::make('layouts.header') }}
        <main class="relative d-flex mw-100" style="flex: 1 1 auto;">
            @yield('content')
        </main>
        {{ View::make('layouts.footer') }}
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>

</html>
