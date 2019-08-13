<nav class="bg-indigo-900 text-white py-4 shadow-xl">
    <div class="container mx-auto px-2 flex flex-row justify-between">
        <a class="flex text-2xl font-hairline mr-8 hover:text-teal-300" href="{{ url('/') }}">
            {{ config('app.name', 'LaraLifts') }}
        </a>
        <ul class="flex font-bold items-center">
            @guest
                <li class="px-4">
                    <a class="hover:text-teal-300" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="px-4">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="px-4">
                    @include('partials.navigation.user-menu')
                </li>
            @endguest
        </ul>
    </div>
</nav>

