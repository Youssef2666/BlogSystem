<x-app-layout>
    @section('title','تسجيل الدخول')
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div dir="rtl">
                <x-label for="email" value="{{ __(' البريد الالكتروني') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                    autofocus autocomplete="username" />
            </div>

            <div dir="rtl" class="mt-4">
                <x-label for="password" value="{{ __('كلمة السر') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div dir="rtl" class="block mt-4">
                <label for="remember_me" class="flex items-center ">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('تذكرني') }}</span>
                </label>
            </div>

            <div class="flex flex-col items-center justify-end mt-4 gap-y-2">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        {{ __('نسيت كلمة السر ؟') }}
                    </a>
                @endif

                <x-button class="ml-4  hover:bg-yellow-600">
                    {{ __('تسجيل الدخول') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-app-layout>
