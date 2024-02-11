<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apaza - @yield('titulo')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black">
                APAZA
            </h1>
            <nav class="flex gap-14 items-center">   
                <a class="font-bold uppercase text-gray-800 text-sm border-b-4 border-transparent hover:border-black" href="/">Inicio</a>
                <a class="font-bold uppercase text-gray-800 text-sm border-b-4 border-transparent hover:border-black" href="/about">Quiénes somos</a>
                <a class="font-bold uppercase text-gray-800 text-sm border-b-4 border-transparent hover:border-black" href="/info">Información General</a>
                <a class="font-bold uppercase text-gray-800 text-sm border-b-4 border-transparent hover:border-black" href="/login">Administrador</a>
                <a class="font-bold uppercase text-gray-800 text-sm border-b-4 border-transparent hover:border-black" href="/crear-cuenta">Crear</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl mb-10">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>
    <footer class="text-center p-5 text-gray-500 font-bold uppercase">
        APAZA - Todos los derechos reservados {{ date('Y') }}
    </footer>
</body>

</html>