<div class="bg-white sticky">
    <p class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
        <svg class="bi pe-none me-2" width="30" height="24">
            <use xlink:href="#bootstrap" /></svg>
        <span class="fs-5 fw-semibold">
            Categories
        </span>
        </>
        <div class="list-group list-group-flush border-bottom scrollarea">
            @foreach($categories as $cat)
                <button type="button" x-on:click.prevent="loadTodos('{{ $cat->slug }}')"
                    class="list-group-item list-group-item-action py-3 lh-sm category-item"
                    x-bind:class="{'active': activeCategory === '{{ $cat->slug }}'}" aria-current="true">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <strong class="mb-1">
                            {{ $cat->title }}
                        </strong>
                        <span class="badge bg-primary rounded-pill">
                            {{ $cat->todos_count }}
                        </span>
                    </div>
                </button>
            @endforeach
        </div>
</div>
