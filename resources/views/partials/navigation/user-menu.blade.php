<app-dropdown label="{{ Auth::user()->name }}">
    <ul>
        <li>
            <a class="hover:text-teal-300" href="{{ route('profile', ['user' => Auth::user()]) }}">Profile</a>
        </li>
        <li>
            <a class="hover:text-teal-300"
               href="{{ route('logout') }}"
               onclick="event.preventDefault();
       document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
        </li>
    </ul>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</app-dropdown>
