<x-custom-guest-layout>
    <h1 class="text-1xl font-bold text-left mb-12" style="width: 75%; margin-left: auto; margin-right: auto;">
        {{ __('Forgot your password?') }}
    </h1>

    <div class="flex items-center justify-center h-full">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}" class="w-3/5">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="border-indigo-900 block mt-1 w-full sm:rounded-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-center ms-3 sm:rounded-full bg-orange-500 hover:bg-orange-700 w-full mt-12">
                <x-primary-button class="flex items-center justify-center">
                    {{ __('Email Password Reset Link') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-custom-guest-layout>
