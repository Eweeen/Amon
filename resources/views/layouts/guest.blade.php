<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- META -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- TITLE -->
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- FAVICON -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/form.css') }}">

    </head>
    <body>

        {{ $slot }}

        @include('partials.footer')
        <script type="text/javascript" src="{{ asset('libs/jquery.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
