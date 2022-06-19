<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="manage your time with todos and categories and tags">
    <meta name="keywords" content="php, laravel, todos, alpinejs, tags">
    <meta name="author" content="Ahmed Adel">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MyTodos</title>

    <style>
        [x-cloak] {
            display: none !important;
        }

    </style>

    @include('splash')

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="splashScreen"><div style="position: relative"><div style="display: flex; justify-content: center; align-items: center;height: 100vh;"><div class="sk-cube-grid"><div class="sk-cube sk-cube1"></div><div class="sk-cube sk-cube2"></div><div class="sk-cube sk-cube3"></div><div class="sk-cube sk-cube4"></div><div class="sk-cube sk-cube5"></div><div class="sk-cube sk-cube6"></div><div class="sk-cube sk-cube7"></div><div class="sk-cube sk-cube8"></div><div class="sk-cube sk-cube9"></div></div></div></div></div>

    <div class="dark-light" x-data="{
        darkMode: false,
        toggle: async function () {
            this.darkMode = !this.darkMode;
            localStorage.setItem('darkMode', this.darkMode ? '1' : '0');
            if (this.darkMode) {
                document.body.classList.remove('light-mode');
                return;
            }
            document.body.classList.add('light-mode');
        },
    }" x-init="async () => {
        darkMode = localStorage.getItem('darkMode') === '0' ? true : false;
        toggle();
    }" x-on:click.prevent="toggle">
        <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" /></svg>
    </div>
    <div class="app">
        <div class="header">
            @include('glass-layout.navbar')
        </div>
        <div class="wrapper">
            @yield('content')
        </div>
        <div class="overlay-app"></div>
    </div>
    <x-toast />
    @include('footer')

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <div class="d-none" x-data="{
        setAsBackground: function(url) {
            console.log('looded')
            document.body.style.backgroundImage = 'url('+ url +')';
        },
    }">
        <img src='/img/macos-big-sur-1280x720-dark-wwdc-2020-22655.jpg' style="display: none" id="bg-image" x-on:load.window="setAsBackground('/img/macos-big-sur-1280x720-dark-wwdc-2020-22655.jpg')" />
    </div>
</body>

</html>
