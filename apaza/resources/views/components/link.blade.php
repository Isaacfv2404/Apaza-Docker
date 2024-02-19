@php
    $classes = 'underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500';
@endphp
<!-- Se crea una variable de php para las clases y se asignan -->
<div>
        <a {{ $attributes->merge(['class'=>$classes]) }}>
            {{ $slot }}
        </a>
</div>