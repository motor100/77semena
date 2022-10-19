<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img src="/img/login-logo.svg" alt="">
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full input" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="form-group">
                <x-input-label for="password" :value="__('Пароль')" />

                <x-text-input id="password" class="block mt-1 w-full input"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4 custom-checkbox-wrapper">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 custom-checkbox" name="remember">
                <label for="remember_me" class="inline-flex items-center custom-checkbox-label"></label>
                <div class="ml-2 text-sm text-gray-600 checkbox-text">{{ __('Запомнить меня') }}</div>
            </div>

            <div class="flex items-center justify-end mt-4 submit-btn-wrapper">
                @if (Route::has('password.request'))
                    <div class="forgot-password">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 forgot-password-link" href="{{ route('password.request') }}">
                            {{ __('Забыли пароль?') }}
                        </a>
                    </div>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Войти') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
