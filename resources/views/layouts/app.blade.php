<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class=" flex flex-row min-h-screen bg-gray-100">
            
            <!-- Page Heading -->
            <header class=" bg-white shadow">
                @include('layouts.navigation')              
            </header>
            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
        </div>
        <script>let icon1 = document.getElementById("icon1");
            let menu1 = document.getElementById("menu1");
            const showMenu1 = (flag) => {
              if (flag) {
                icon1.classList.toggle("rotate-180");
                menu1.classList.toggle("hidden");
              }
            };
            let icon2 = document.getElementById("icon2");
            
            const showMenu2 = (flag) => {
              if (flag) {
                icon2.classList.toggle("rotate-180");
              }
            };
            let icon3 = document.getElementById("icon3");
            
            const showMenu3 = (flag) => {
              if (flag) {
                icon3.classList.toggle("rotate-180");
              }
            };
            
            let Main = document.getElementById("Main");
            let open = document.getElementById("open");
            let close = document.getElementById("close");
            
            const showNav = (flag) => {
              if (flag) {
                Main.classList.toggle("-translate-x-full");
                Main.classList.toggle("translate-x-0");
                open.classList.toggle("hidden");
                close.classList.toggle("hidden");
              }
            };
            </script>
    </body>
</html>
