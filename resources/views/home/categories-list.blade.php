<div class="card-body bg-transparent rounded">
    <div class="bg-blur">
        <div class="h2 text-center mt-2 mb-2 py-2 text-primary">
            <div class="fs-2 d-inline-block">
                @include('icons.card-list')
            </div>
            <span>Categories</span>
        </div>
        <div class="list-group list-group-flush border-bottom scrollarea bg-transparent category-list">
            @foreach($categories as $cat)
                <button type="button" x-on:click.prevent="loadTodos('{{ $cat->slug }}')"
                    class="list-group-item list-group-item-action py-3 lh-sm category-item"
                    x-bind:class="{'active': activeCategory === '{{ $cat->slug }}'}" aria-current="true">
                    <div class="d-flex w-100 align-items-center justify-content-between" x-data="{
                        todos_count: {{ $cat->todos_count }},
                        decree: function (slug) {
                            if (slug !== '{{$cat->slug}}') {
                                return;
                            }
                            this.todos_count--;
                        },
                        incree: function (slug) {
                            if (slug !== '{{$cat->slug}}') {
                                return;
                            }
                            this.todos_count++;
                        },
                    }">
                        <strong class="mb-1">
                            {{ $cat->title }}
                        </strong>
                        <span class="badge bg-primary rounded-pill" x-text="todos_count"
                            x-on:delete-todo.window="decree($event.detail.slug)"
                            x-on:add-todo.window="incree($event.detail.slug)">
                        </span>
                    </div>
                </button>
            @endforeach
        </div>
    </div>
</div>
