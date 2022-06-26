<hr />
<div class="flex items-center justify-end mt-4">
    <a href="{{ route('ext-login.google.redirect') }}" class='btn btn-outline-info me-2'>
        @include('icons.linkedin')
        sign in with Google
    </a>
    <a href="{{ route('ext-login.github.redirect') }}" class="btn btn-outline-primary">
        @include('icons.github')
        sign in with Github
    </a>
</div>