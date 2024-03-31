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

    <x-public-navbar />

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Nosotros') }}
            </h2>
        </x-slot>
    
       
        <div class="flex flex-col items-center pt-8  ">
           

            <section id="inicio" class="py-8 post-container">

                <div class="post-grid">
                    <h1 class="text-3xl font-bold text-apaza-border mb-4">Historia</h1>
                    <p class="text-gray-700 mb-4"> La Asociación de Personas con Autismo de la Zona Atlántica, con personería jurídica 3-002-645593, nace primero como un grupo de 10 familias que buscando mejorar la calidad de vida de sus hijos con autismo, encuentra en las terapias alternativas esa opción, gracias a la Asociación Costarricense de Terapias Asistidas con Mascotas (ACOTEAMA) la cual brindó el apoyo que se requería en ese momento.
                        En el mes de junio del año 2010 el grupo de padres tuvo la primera intervención, el grupo creció y se vio en la necesidad de trabajar empezando por concientizar sobre la condición de autismo, empezando por los mismos padres y familiares y a la comunidad (pueblo), para que las personas con autismo fueran integradas en la sociedad como corresponde.
                        El 02 de abril del año 2011 se realizó la primera actividad alusiva en conmemoración al día Mundial de la Concienciación del Autismo, declarado así el 18 de diciembre del 2007 por la Asamblea General de las Naciones Unidas, en esa conmemoración se presentaron diferentes actos culturales, se hizo presente ACOTEAMA y la licenciada Mitzy Magallón pionera en Costa Rica en terapias a personas con autismo.
                        El 17 de abril del año 2011 se llevó a cabo la Asamblea Constitutiva y el 03 de octubre del año 2011 la Asociación de Personas con Autismo de la Zona Atlántica conocida por sus siglas como APAZA, fue inscrita como asociación legalmente constituida según ley 218, con personería jurídica No3-002-645593.</p>
                    <!-- Puedes agregar imágenes, vídeos o cualquier otro contenido aquí -->
                </div>
               
            </section>

            <section id="inicio" class="py-8 post-container">

           

                <div class="post-grid">
                    <h1 class="text-3xl font-bold text-apaza-border mb-4">Misión</h1>
                    <p class="text-gray-700 mb-4">Comprometidos en fortalecer todas las capacidades de las personas con Trastorno del Espectro Autista, con respeto y tolerancia, trabajando en equipo en la defensa y promoción de sus derechos para tener así una participación más solidaria y justa en la sociedad.</p>
                    <!-- Puedes agregar imágenes, vídeos o cualquier otro contenido aquí -->
                </div>
               
            </section>

            <section id="inicio" class="py-8 post-container">
                <div class="post-grid">
                    <h1 class="text-3xl font-bold text-apaza-border mb-4">Visión</h1>
                    <p class="text-gray-700 mb-4">Mejorar la calidad de vida de las personas con autismo y sus familias. Creando desde su inicio un espacio formador, donde se brinden las herramientas necesarias para la inclusión en la sociedad de una manera efectiva.</p>
                    <!-- Puedes agregar imágenes, vídeos o cualquier otro contenido aquí -->
                </div>
               
            </section>
        </div>
     
            <div class="flex justify-center space-x-8 pt-8 ">
                <div class="flex flex-col items-center">
                    <img class="inline-block h-24 w-24 rounded-full ring-2 ring-white mb-2" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Presidente">
                    <span class="text-sm">Presidente</span>
                </div>
                <div class="flex flex-col items-center">
                    <img class="inline-block h-24 w-24 rounded-full ring-2 ring-white mb-2" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Vicepresidente">
                    <span class="text-sm">Vicepresidente</span>
                </div>
                <div class="flex flex-col items-center">
                    <img class="inline-block h-24 w-24 rounded-full ring-2 ring-white mb-2" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Secretaria">
                    <span class="text-sm">Secretaria</span>
                </div>
                <div class="flex flex-col items-center">
                    <img class="inline-block h-24 w-24 rounded-full ring-2 ring-white mb-2" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Tesorera">
                    <span class="text-sm">Tesorera</span>
                </div>
            </div>
        

</body>
</html>
