<div class="row">
    <div class="col-9">
        <div class="header-menu">
            <a class="main-header-link" x-bind:class="{'is-active': tab === 'all'}" id="ex1-tab-1" data-mdb-toggle="tab"
                href="#" role="tab" aria-controls="ex1-tabs-1" aria-selected="false" x-on:click.prevent="setTab('all')">
                <div class="d-inline-block">
                    @include('icons.check_list')
                </div>
                <span class="d-none d-sm-inline-block">
                    All
                </span>
            </a>
            <a class="main-header-link" x-bind:class="{'is-active': tab === 'active'}" id="ex1-tab-2" data-mdb-toggle="tab"
                href="#" role="tab" aria-controls="ex1-tabs-2" aria-selected="false"
                x-on:click.prevent='setTab("active")'>
                <div class="d-inline-block">
                    @include('icons.patch-exclamation-fill')
                </div>
                <span class="d-none d-sm-inline-block">
                    Active
                </span>
            </a>
            <a class="main-header-link" x-bind:class="{'is-active': tab === 'done'}" id="ex1-tab-3" data-mdb-toggle="tab"
                href="#" role="tab" aria-controls="ex1-tabs-3" aria-selected="false"
                x-on:click.prevent='setTab("done")'>
                <div class="d-inline-block">
                    @include('icons.patch-check')
                </div>
                <span class="d-none d-sm-inline-block">
                    Completed
                </span>
            </a>
        </div>
    </div>
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

            if (this.tab == 'all') return;

            this.todosLength = [...this.todos.filter(x => {
                if (this.tab === 'active') {
                    return !x.done;
                }
                {{-- completed tab --}}
                return x.done;
            })].length
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
