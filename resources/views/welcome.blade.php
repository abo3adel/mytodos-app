<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <style>
        [x-cloak] {
            display: none !important;
        }

    </style>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
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
        <div class="" style="color: var(--theme-color)">
            <div class="row">
                <div class="px-4 py-5 my-5 text-center">
                    <img class="d-block mx-auto mb-3" src="/img/logo-large.png" alt="mytodos logo">
                    <div class="col-lg-6 mx-auto">
                        <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with and mixins,
                            responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                            <a href="{{ route('home') }}" class="btn btn-primary btn-lg px-4 gap-3">
                                Enter App
                            </a>
                            <a href="{{ route('home') }}" class="btn btn-outline-success btn-lg px-4">
                                or Enter SPA version
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay-app"></div>
    </div>
</body>

</html>
