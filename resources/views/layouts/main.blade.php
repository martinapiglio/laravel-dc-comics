<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')
    <link rel="stylesheet" href=" {{ Vite::asset('scss/app.scss') }} ">

</head>

<body>

    @php
        $navbarLinks = config('navbar');
        $footerLinks = config('footer');
        $icons = config('icons');
    @endphp

    @include('partials/header')

    @include('partials/jumbotron')

    @yield('main')

    @yield('buy-comics')

    @include('partials/footer')

</body>

</html>