<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ str_replace('_', ' ', config('app.name')) }}</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('logo.ico') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Script para el navbar en menú móvil -->
    @vite(['resources/js/app.js'])
    @vite(['resources/js/pages/login.js'])
    @vite(['resources/js/shared/navbar.js'])
    @vite(['resources/js/pages/periodic-table.js'])
    @vite(['resources/js/pages/render-online.js'])
    @vite(['resources/js/shared/scrollToTop.js'])


    <!-- Carga los componentes importados -->
    @vite(['resources/css/app.css'])
    @vite('resources/css/views/pages/landing.css')
    @vite('resources/css/views/pages/login.css')
    @vite('resources/css/views/shared/navbar.css')
    @vite('resources/css/views/pages/periodic-table.css')
    @vite('resources/css/views/pages/render-online.css')




    <script src="{{ asset('js/3Dmol.js') }}"></script>

    @stack('styles')
</head>

<body>
    <!-- NAVBAR -->
    @include('shared.navbar')

    <!-- CONTENIDO -->

    @yield('content')

    <!-- FOOTER -->
    @include('shared.footer')

    <!-- BOTÓN DE SCROLL -->
    <button class="scroll-to-top fixed bottom-8 right-5 z-[1000] bg-[var(--secondary)] text-white rounded-xl w-[70px] h-[50px] flex items-center justify-center shadow-lg transition-transform duration-200 hover:scale-110 p-0 overflow-hidden"
        onclick="scrollToTop()"
        style="display: none;">
        <img src="{{ asset('images/up.png') }}" alt="Subir" class="w-8 h-auto object-contain transition-transform duration-200" />
    </button>

</body>

</html>