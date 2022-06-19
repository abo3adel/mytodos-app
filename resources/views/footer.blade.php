<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top w-100" style="color: var(--theme-color);background: var(--theme-bg-color);">
    <p class="col-md-3 mb-0 text-muted">
        <div class='text-center'>
            project repo @ <a href="https://github.com/abo3adel/mytodos-app/tree/master" target="_blank">
                @include('icons.github')
                github
            </a>
        </div>
    </p>

    <div class="col-md-5 mb-0 text-center">
        Copyright <a href="https://abo3adel.github.io/" target='_blank' class="fs-6 text-success"
            style="font-variant: small-caps">Ahmed Adel</a>&copy; 2022
        {{ date('Y') > 2022 ? '- ' . date('Y') : '' }}.
        <br />
        <span class='inline-block'>All rights reserved</span>
    </div>

    @include('footer.social')
</footer>
{{--   
<div class='px-2 py-5 text-white bg-gray-900 dark:bg-blue-900 dark:border-t dark:border-gray-100' dir="ltr">
    <div class='grid grid-cols-1 gap-3 sm:grid-cols-2 sm:gap-2'>
@include('footer.social')
        <div class='text-center'>
            Copyright <a href="https://abo3adel.github.io/" target='_blank'
                class="text-lg text-yellow-400 whitespace-pre hover:font-bold"
                style="font-variant: small-caps">Ahmed Adel</a>&copy; 2020
            {{ date('Y') > 2020 ? '- ' . date('Y') : '' }}.
<br />
<span class='inline-block'>All rights reserved</span>
</div>
</div>
</div> --}}
