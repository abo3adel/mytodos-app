<div class="header-menu">
    @if(Route::currentRouteName() === 'home')
        <a class="menu-link d-md-none" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
            aria-controls="offcanvasExample">
            @include('icons.view-list')
        </a>
    @endif
    <a class="menu-link" href="/">
        @include('icons.house-door')
        <span class="d-none d-md-inline">
            Home
        </span>
    </a>
    <a class="menu-link" href="{{ route('categories.index') }}">
        @include('icons.card-list')
        <span class="d-none d-md-inline">
            Categories
        </span>
    </a>
    <a class="menu-link" href="#">
        @include('icons.tags')
        <span class="d-none d-md-inline">
            Tags
        </span>
    </a>
</div>
<div class="header-profile">
    <!-- Authentication Links -->
    @guest
        @if(Route::has('login'))
            {{-- <li class="nav-item"> --}}
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
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
        <a id="navbarDropdown" class="" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false" v-pre>
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
