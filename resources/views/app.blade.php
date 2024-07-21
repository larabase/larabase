<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Codescandy">

    <!-- Google tag (gtag.js) -->
    @include('common.tagmanager')

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('static/images/favicon/favicon.ico') }}">

    <!-- Libs CSS -->
    <link href="{{ asset('static/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('static/libs/@mdi/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('static/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('static/css/theme.min.css') }}">
    @routes
    @vite('resources/js/app.ts')
    @inertiaHead
</head>

<body>
    @inertia

    <!-- Libs JS -->
    <script src="{{ asset('static/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('static/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('static/libs/feather-icons/dist/feather.min.js') }}"></script>
    <script src="{{ asset('static/libs/simplebar/dist/simplebar.min.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('static/js/theme.min.js') }}"></script>

</body>

</html>