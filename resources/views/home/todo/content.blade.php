<ul class="list-group" x-data="{
    updating: '',
    complete: async function(tid, body, done) {
        if (this.updating === tid) return;
        this.updating = tid;

        const res = await axios.put('/api/todos/' + tid, {
            category_slug: this.activeCategory,
            body: body,
            done: !done
        }).catch(err => err)

        this.updating = '';
        if (!res || res.status !== 204) {
            $dispatch('notice', {type: 'error', text: 'Error Updating TODO'})
            return;
        }

        $dispatch('complete-todo', tid)
        $dispatch('notice', {type: 'success', text: 'Updated'})
    },
}">
    <template x-for="t in todos" :key="t.id">
        <template x-if="tab === 'all' ||
                (tab === 'active' && !t.done) ||
                (tab === 'done' && t.done)">
            <li class="px-0 py-1 row align-items-center flex-grow-1 border-0 bg-transparent border-bottom">
                <div class="col-11 d-inline-block">
                    <div class="d-flex">
                        <template x-if='updating == t.id'>
                            <div class="spinner-border spinner-border-sm text-primary mx-1" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </template>
                        <input class="form-check-input me-3" type="checkbox" x-bind:value="t.id"
                            x-bind:aria-label="t.id" x-bind:id="t.id" x-bind:checked="t.done"
                            x-bind:disabled="updating == t.id" x-on:click.prevent="complete(t.id, t.body, t.done)" />
                        <label :for="t.id" class="lead fw-normal mb-0 w-100 ms-n2 ps-2 py-1 rounded"
                            x-text="t.body" x-on:click.prevent="complete(t.id, t.body, t.done)"></label>
                            {{-- badges --}}
                            <div class="d-flex justify-content-center align-content-center">
                                <template x-for='tag in (t.tags || {data: []}).data' :key='tag.id'>
                                    <span class="badge bg-primary text-sm mx-1 my-auto" x-text='tag.title' x-bind:class="{
                                            'bg-danger': tag.id === 1,
                                            'bg-success': tag.id === 2,
                                            'bg-info': tag.id === 3,
                                        }"></span>
                                </template>
                                <span class="badge bg-primary mx-1 my-auto" x-text='t.user_tag'></span>
                            </div>
                    </div>
                </div>
                <div class="col-1 d-inline-block">
                    <button class="btn btn-danger btn-sm">
                        @include('icons.trash_bin')
                    </button>
                </div>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-11 col-md-10 d-inline-block">
                        {{-- <template x-for='tag in (t.tags || {data: []}).data' :key='tag.id'>
                            <span class="badge bg-primary text-sm mx-1" x-text='tag.title' x-bind:class="{
                                    'bg-danger': tag.id === 1,
                                    'bg-success': tag.id === 2,
                                    'bg-info': tag.id === 3,
                                }"></span>
                        </template>
                        <span class="badge bg-primary mx-1" x-text='t.user_tag'></span> --}}
                    </div>
    
                </div>
            </li>
        </template>
    </template>
</ul>
