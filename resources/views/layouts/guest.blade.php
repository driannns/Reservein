<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Reservein.CO</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700;800&family=Jost:wght@400;500&family=PT+Serif&family=Poppins:wght@400;500;600;700&display=swap');

    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen">
        @include('layouts.navigation')
        <!-- Page Content -->
        <main class="flex" style="height: 90vh">
            <div class="w-3/12 bg-[#6196B4] relative" style="height: 90vh;">
            <div class="w-10/12 mx-auto mt-20">
                <h1 class="text-5xl text-white font-bold drop-shadow-lg">Effortless
                    <br>Meeting
                    <br>at Your 
                    <br>Fingertips</h1>
                </div>
                <img class="w-11/12 left-1/2 -translate-x-1/2 absolute bottom-0" src="assets/login.png" alt="">
            </div>
            <div class="w-9/12" style="background-image: url('assets/register.png'); background-size: cover;">
                <div class="w-full" style="height: 90vh;">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </div>
</body>

</html>
