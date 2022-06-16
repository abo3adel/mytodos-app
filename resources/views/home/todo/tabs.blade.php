<div class="mb-4 pb-2 row">
    <ul class="nav nav-tabs col-9" id="ex1" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link" x-bind:class="{'active': tab === 'all'}" id="ex1-tab-1" data-mdb-toggle="tab" href="#"
                role="tab" aria-controls="ex1-tabs-1" aria-selected="false" x-on:click.prevent="tab = 'all'">
                <div class="d-inline-block">
                    @include('icons.check_list')
                </div>
                <span class="d-none d-sm-inline-block">
                    All
                </span>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" x-bind:class="{'active': tab === 'active'}" id="ex1-tab-2" data-mdb-toggle="tab"
                href="#" role="tab" aria-controls="ex1-tabs-2" aria-selected="false"
                x-on:click.prevent='tab = "active"'>
                <div class="d-inline-block">
                    @include('icons.patch-exclamation-fill')
                </div>
                <span class="d-none d-sm-inline-block">
                    Active
                </span>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" x-bind:class="{'active': tab === 'done'}" id="ex1-tab-3" data-mdb-toggle="tab" href="#"
                role="tab" aria-controls="ex1-tabs-3" aria-selected="false" x-on:click.prevent='tab = "done"'>
                <div class="d-inline-block">
                    @include('icons.patch-check')
                </div>
                <span class="d-none d-sm-inline-block">
                    Completed
                </span>
            </a>
        </li>
    </ul>
    <div class="d-flex justify-content-end align-items-center col-3" x-data="{
        tags: [
            {title: 'urgent', value: 'urgent', id: 1},
            {title: 'easy', value: 'easy', id: 2},
            {title: 'needs help', value: 'needs_help', id: 3},
        ],
        tagVal: 'all',
        oldTodos: [...todos],
        filterByTag: function() {
            this.loadingTodos = true;

            if (this.tagVal === 'all') {
                this.todos = [...this.oldTodos];
            } else {
                this.todos = [...this.oldTodos.filter(x => (x.tags && x.tags.data && x.tags.data[0] && x.tags.data[0].id) == this.tagVal)];
            }

            setTimeout(() => this.loadingTodos = false, 250);
        },
    }" x-init="setTimeout(() => {oldTodos = [...todos];}, 500)">
        <p class="small mb-0 ms-4 me-2">
            @include('icons.funnel-fill')
        </p>
        <select class="select" x-model="tagVal" x-on:change.prevent='filterByTag'>
            <option value="all">All</option>
            <template x-for="tag in tags" :key="tag.id">
                <option x-bind:value="tag.id" x-text="tag.title"></option>
            </template>
        </select>
    </div>
</div>
