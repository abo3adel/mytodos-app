<div class="menu-circle"></div>
<div class="header-menu">
    <a class="menu-link d-md-none" href="#">
        @include('icons.view-list')
    </a>
    <a class="menu-link is-active" href="#">Apps</a>
    {{-- <a class="menu-link notify" href="#">Your work</a> --}}
    <a class="menu-link" href="#">Discover</a>
    {{-- <a class="menu-link notify" href="#">Market</a> --}}
</div>
<div class="header-profile">
    <!-- Authentication Links -->
    @guest
        @if(Route::has('login'))
            {{-- <li class="nav-item"> --}}
                <a class="nav-link"
                    href="{{ route('login') }}">{{ __('Login') }}</a>
            {{-- </li> --}}
        @endif

        @if(Route::has('register'))
            {{-- <li class="nav-item"> --}}
                <a class="nav-link"
                    href="{{ route('register') }}">{{ __('Register') }}</a>
            {{-- </li> --}}
        @endif
    @else
        {{-- <li class="nav-item dropdown"> --}}
            <a id="navbarDropdown" class="" href="#" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                <img class="profile-img" src="http://images.test/users/2.jpg" alt="">
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        {{-- </li> --}}
    @endguest
</div>
