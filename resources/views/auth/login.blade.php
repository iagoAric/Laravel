<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            </a>
        </x-slot>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block w-full py-2 px-3 rounded-lg border border-gray-300 focus:ring focus:ring-indigo-200 focus:border-indigo-500" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div>
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block w-full py-2 px-3 rounded-lg border border-gray-300 focus:ring focus:ring-indigo-200 focus:border-indigo-500" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="flex items-center space-x-2">
                <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 focus:ring focus:ring-indigo-200" name="remember">
                <label for="remember_me" class="text-gray-600">{{ __('lembre-me') }}</label>
            </div>

            <div class="flex items-center justify-between">
                @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 hover:underline" href="{{ route('password.request') }}">
                    {{ __('Esqueceu a senha ?') }}
                </a>
                @endif

                <x-button class="bg-indigo-500 hover:bg-indigo-600 text-white">
                    {{ __('Entrar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
