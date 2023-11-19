<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('styles')
    <title>Portafolio - @yield('title-guest')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="h-14 bg-gradient-to-r from-violet-500 to-fuchsia-500">

{{--Contenido--}}

<main class="container mx-auto mt-10">
    @yield('container-guest')
</main>



</body>
</html>
