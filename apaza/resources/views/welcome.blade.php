<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['resources/css/welcome.css'])

</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- Navbar -->
        <x-public-navbar />
        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif
        <!-- Page Content -->
        <main>
            <!-- Sección de Inicio -->
            <section id="inicio" class="py-8 post-container">
                <div class="post-grid">
                    <h1 class="text-3xl font-bold text-gray-900 mb-4">Bienvenidos a nuestra asociación</h1>
                    <p class="text-gray-700 mb-4">Aquí puedes colocar información sobre tu asociación. Por ejemplo, su misión, visión, objetivos, etc.</p>
                    <!-- Puedes agregar imágenes, vídeos o cualquier otro contenido aquí -->
                </div>
                <div class="post-grid">
                    <h1 class="text-3xl font-bold text-gray-900 mb-4">Bienvenidos a nuestra asociación</h1>
                    <p class="text-gray-700 mb-4">Aquí puedes colocar información sobre tu asociación. Por ejemplo, su misión, visión, objetivos, etc.</p>
                    <!-- Puedes agregar imágenes, vídeos o cualquier otro contenido aquí -->
                </div>
                <div class="post-grid">
                    <h1 class="text-3xl font-bold text-gray-900 mb-4">Bienvenidos a nuestra asociación</h1>
                    <p class="text-gray-700 mb-4">Aquí puedes colocar información sobre tu asociación. Por ejemplo, su misión, visión, objetivos, etc.</p>
                    <!-- Puedes agregar imágenes, vídeos o cualquier otro contenido aquí -->
                </div>
                <div class="post-grid">
                    <h1 class="text-3xl font-bold text-gray-900 mb-4">Bienvenidos a nuestra asociación</h1>
                    <p class="text-gray-700 mb-4">Aquí puedes colocar información sobre tu asociación. Por ejemplo, su misión, visión, objetivos, etc.</p>
                    <!-- Puedes agregar imágenes, vídeos o cualquier otro contenido aquí -->
                </div>
            </section>
            <!-- Sección de Nosotros -->
            <section id="nosotros" class="py-8 post-container">
                <div class="post-grid">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Sobre Nosotros</h2>
                    <p class="text-gray-700 mb-4">Aquí puedes colocar información sobre tu asociación. Por ejemplo, su historia, equipo, logros, etc.</p>
                    <!-- Puedes agregar imágenes, vídeos o cualquier otro contenido aquí -->
                </div>
                <div class="post-grid">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Sobre Nosotros</h2>
                    <p class="text-gray-700 mb-4">Aquí puedes colocar información sobre tu asociación. Por ejemplo, su historia, equipo, logros, etc.</p>
                    <!-- Puedes agregar imágenes, vídeos o cualquier otro contenido aquí -->
                </div>
                <div class="post-grid">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Sobre Nosotros</h2>
                    <p class="text-gray-700 mb-4">Aquí puedes colocar información sobre tu asociación. Por ejemplo, su historia, equipo, logros, etc.</p>
                    <!-- Puedes agregar imágenes, vídeos o cualquier otro contenido aquí -->
                </div>
            </section>
            <!-- Sección de Actividades -->
            <section id="actividades" class="py-8 post-container">
                <div class="post-grid">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Nuestras Actividades</h2>
                    <p class="text-gray-700 mb-4">Aquí puedes colocar información sobre las actividades que realiza tu asociación. Por ejemplo, eventos pasados y futuros, programas, proyectos, etc.</p>
                    <!-- Puedes agregar imágenes, vídeos o cualquier otro contenido aquí -->
                </div>
                <div class="post-grid">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Nuestras Actividades</h2>
                    <p class="text-gray-700 mb-4">Aquí puedes colocar información sobre las actividades que realiza tu asociación. Por ejemplo, eventos pasados y futuros, programas, proyectos, etc.</p>
                    <!-- Puedes agregar imágenes, vídeos o cualquier otro contenido aquí -->
                </div>
                <div class="post-grid">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Nuestras Actividades</h2>
                    <p class="text-gray-700 mb-4">Aquí puedes colocar información sobre las actividades que realiza tu asociación. Por ejemplo, eventos pasados y futuros, programas, proyectos, etc.</p>
                    <!-- Puedes agregar imágenes, vídeos o cualquier otro contenido aquí -->
                </div>
            </section>
        </main>
        <!-- Footer -->
        <footer class="bg-white py-6 sm:flex sm:justify-center sm:items-center">
            <div class="text-center sm:text-left">
                <!-- Botones de inicio de sesión y registro -->
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline-none focus:ring focus:ring-gray-300 rounded-md px-4 py-2 bg-gray-200 hover:bg-gray-300">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline-none focus:ring focus:ring-gray-300 rounded-md px-4 py-2 bg-gray-200 hover:bg-gray-300">Iniciar Sesión</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline-none focus:ring focus:ring-gray-300 rounded-md px-4 py-2 bg-gray-200 hover:bg-gray-300">Registrarse</a>
                    @endif
                @endauth
            </div>
        </footer>
    </div>
</body>
</html>
