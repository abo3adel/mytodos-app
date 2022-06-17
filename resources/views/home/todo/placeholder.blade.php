<div>
    <template x-for="pl in placeholders" :key="pl + Math.random()">
        <li class="adope-products row m-0">
            <div class="px-0">
                <div class="placeholder-glow">
                    <span class="placeholder px-1 px-md-3 px-lg-4 d-inline-block"></span>
                    <span class="placeholder col-8 d-inline-block"></span>
                    <span class="placeholder col-1 d-inline-block"></span>
                    <span class="col-1 placeholder"></span>
                    <a href="#" tabindex="-1" class="btn btn-danger btn-sm disabled placeholder col-1 float-end clearfix hstack text-center">
                        @include('icons.trash_bin')
                    </a>
                </div>
            </div>
        </li>
    </template>

</div>
