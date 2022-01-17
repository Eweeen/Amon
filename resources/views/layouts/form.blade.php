<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- TITLE -->
    <title>AMON</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
    {{ $style }}
    <link href="{{ asset('libs/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <!-- AJOUT DE FICHIERS css -->
    @yield('styles')
</head>
<body>

    {{ $slot }}

    @include('partials.footer')

    <script type="text/javascript" src="{{ asset('libs/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/form.js') }}"></script>
    <!-- AJOUT DE FICHIERS JS -->
    @yield('scripts')
</body>
</html>