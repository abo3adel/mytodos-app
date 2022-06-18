@extends('layouts.glass')

@section('content')
<div class="" style="color: var(--theme-color)">
    <div class="row">
        <div class="px-4 py-5 my-5 text-center">
            <img class="d-block mx-auto mb-3" src="/img/logo-large.png" alt="mytodos logo">
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat, Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                </p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="{{ route('home') }}" class="btn btn-primary btn-lg px-4 gap-3">
                        Enter App
                    </a>
                    <a href="#" class="btn btn-outline-success btn-lg px-4">
                        or Enter SPA version
                        <div class="badge bg-info">
                            soon
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection