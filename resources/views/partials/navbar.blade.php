<nav class="bg-indigo-900 text-white py-4 shadow-xl">
    <div class="container mx-auto px-2 flex flex-row justify-between">
        <a class="flex text-2xl font-hairline mr-8" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <!-- Right Side Of Navbar -->
        <ul class="flex font-bold items-center">
            <!-- Authentication Links -->
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
                    <a class="hover:text-teal-300" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>

