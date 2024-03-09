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
        <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
            <!-- Primary Navigation Menu -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="shrink-0 flex items-center">
                            <a href="{{ route('dashboard') }}">
                                <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                            </a>
                        </div>
                        <!-- Navigation Links -->
                        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                            <x-nav-link href="#inicio" :active="request()->routeIs('dashboard')">
                                {{ __('Inicio') }}
                            </x-nav-link>
                        </div>
                        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                            <x-nav-link href="#nosotros" :active="request()->routeIs('dashboard')">
                                {{ __('Nosotros') }}
                            </x-nav-link>
                        </div>
                        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                            <x-nav-link href="#actividades" :active="request()->routeIs('dashboard')">
                                {{ __('Actividad') }}
                            </x-nav-link>
                        </div>
                    </div>
                    <!-- Hamburger -->
                    <div class="-me-2 flex items-center sm:hidden">
                        <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Responsive Navigation Menu -->
            <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                <div class="pt-2 pb-3 space-y-1">
                    <x-responsive-nav-link href="#inicio" :active="request()->routeIs('dashboard')">
                        {{ __('Inicio') }}
                    </x-responsive-nav-link>
                </div>
            </div>
        </nav>
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
