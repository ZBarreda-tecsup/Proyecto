<x-guest-layout>
    
    <div class="flex items-center justify-center h-full">      
        <!-- Session Status -->
        <x-auth-session-status class="mb-4 w-4/5" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="w-4/5">
            @csrf

            <h1 class="text-5xl font-bold text-center mb-4" style="font-family: 'Carattere', serif; margin-bottom: 20px; width: 50%; margin-left: auto; margin-right: auto;">Regístrate para obtener<br> Ofertas de Viajes</h1>

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="border-indigo-900 block mt-1 w-full sm:rounded-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Contraseña')" />
                <x-text-input id="password" class="border-indigo-900 block mt-1 w-full sm:rounded-full" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-500 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Recuérdame') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-orange-500 hover:text-orange-700 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                @endif

                <x-primary-button class="ms-3 sm:rounded-full bg-orange-500 hover:bg-orange-700">
                    {{ __('Inicia Sesión') }}
                </x-primary-button>
            </div>

            <a class="underline text-sm text-orange-500 hover:text-orange-700 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500" href="{{ route('register') }}">
                {{ __('¿Todavía no te registras?') }}
            </a>
        </form>
    </div>
</x-guest-layout>
