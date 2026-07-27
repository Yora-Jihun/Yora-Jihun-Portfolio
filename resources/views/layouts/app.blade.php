<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Yora Jihun - Portfolio">
    <title>Yora Jihun</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans antialiased text-gray-900 bg-white">
    @yield('preload')
    @include('components.navbar')

<main class="main-content pt-16">
    @yield('content')
</main>
@livewireScripts
</body>
</html>
