<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Reservein.CO</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700;800&family=PT+Serif&family=Poppins:wght@500;600;700&display=swap');
</style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen">
            @include('layouts.navigation')
            <!-- Page Content -->
            <main class="h-screen" style="height: 90vh; background-image: url(/assets/wallpaper.png); background-size: cover; background-repeat: no-repeat; background-position: center;">
            <div class="w-full" style="height: 90vh; background-color: rgba(0, 0, 0, 0.7)">    
            {{ $slot }}
            </div>
            </main>
        </div>
    </body>
</html>
