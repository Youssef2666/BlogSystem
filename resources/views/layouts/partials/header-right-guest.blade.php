<div class="flex space-x-5">
    <x-responsive-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
        {{ __('تسجيل الدخول') }}
    </x-responsive-nav-link>
    <x-responsive-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
        {{ __('التسجيل') }}
    </x-responsive-nav-link>
</div>
