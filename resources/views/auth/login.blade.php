<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ $value }}
        </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>

        <div class="mt-6 text-center">
            <a href="{{ url('auth/google') }}"
               class="bg-red-500 hover:bg-red-600 text-white-50 font-bold py-2 px-4 rounded-md shadow-md transition duration-300 inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M21.35 11.1h-9.4v2.83h5.5a4.8 4.8 0 01-2.1 3.16v2.63h3.4a8.92 8.92 0 004-6.8 9.11 9.11 0 00-.36-2.84z" fill="#4285F4"/>
                    <path d="M12 21a8.98 8.98 0 006.34-2.54l-3.4-2.63a5.68 5.68 0 01-8.52-2.95h-3.4v2.92A8.92 8.92 0 0012 21z" fill="#34A853"/>
                    <path d="M6.3 12.88a5.57 5.57 0 010-3.75V6.2h-3.4A8.92 8.92 0 002.4 12a9.18 9.18 0 003.9 7.3l3.9-3.03z" fill="#FBBC05"/>
                    <path d="M12 4.8a8.72 8.72 0 015.5 2.1L19.9 4a12 12 0 00-7.9-3.2A8.92 8.92 0 002.4 6.2L6.3 9.33a5.68 5.68 0 015.7-4.53z" fill="#EA4335"/>
                </svg>
                Login with Google
            </a>
        </div>
    </x-authentication-card>
</x-guest-layout>
