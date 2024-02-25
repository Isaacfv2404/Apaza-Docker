<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" novalidate>
        @csrf
        <div class="mb-4 text-sm text-gray-600">
        <!-- Name -->
        <div class="mb-4">
            <x-input-label for="fullname" :value="__('Nombre Completo')" class="uppercase"/>
            <x-text-input id="fullname" class="block mt-1 w-full" 
            type="text" name="fullname" :value="old('fullname')" required 
            autofocus autocomplete="name" placeholder="Joe Doe"/>
            <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('Correo electrónico')" class="uppercase"/>
            
            <x-text-input id="email" class="block mt-1 w-full" 
            type="email" name="email" :value="old('email')" required 
            autocomplete="email" placeholder="Joedoe@gmail.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="mb-4">
            <x-input-label for="telefono" :value="__('Teléfono')" class="uppercase"/>
            <x-text-input id="telefono" class="block mt-1 w-full {{ $errors->has('telefono') ? 'border-red-500' : '' }}" 
                type="text" name="telefono" :value="old('telefono')" 
                placeholder="8888-9999" required autocomplete="telefono" />
            <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-input-label for="password" :value="__('Contraseña')" class="uppercase"/>

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" class="uppercase"/>

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex justify-between mt-4">
            <x-link :href="route('login')">
                {{ __('Iniciar sesión') }}
            </x-link>

            <x-primary-button class="ms-4 w-1/2 justify-center">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
        </div>
    </form>
</x-guest-layout>
