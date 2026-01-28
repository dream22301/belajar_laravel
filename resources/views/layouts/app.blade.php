<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        @yield('header')
        <hr>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('form') }}">Form</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('htua') }}">Auth</a>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>