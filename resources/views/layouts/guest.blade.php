<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link href="https://fonts.bunny.net/css?family=carattere:400" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full bg-cover bg-center bg-fixed" style="background-image: url('https://2.bp.blogspot.com/-4zTGeP6ktmw/UaAIttq6PiI/AAAAAAAByik/iC8r8TjY0PE/s1600/towards-the-sunset-1920x1200-wallpaper-amanecer-visto-desde-un-avi%C3%B3n-vistas-a%C3%A9reas.jpg')">
            <div class="flex justify-end h-screen">
                <div class="w-1/2 bg-white shadow-md overflow-hidden sm:rounded-lg">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</body>