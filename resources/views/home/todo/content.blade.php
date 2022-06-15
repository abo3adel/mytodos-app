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
            <li class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
                <template x-if='updating == t.id'>
                    <div class="spinner-border spinner-border-sm text-primary mx-1" role="status">
                        <span class="visually-hidden">Loading...</span>
                      </div>
                </template>
                <input class="form-check-input me-3" type="checkbox" x-bind:value="t.id" x-bind:aria-label="t.body"
                    x-bind:id="t.id" x-bind:checked="t.done" x-bind:disabled="updating == t.id" x-on:click.prevent="complete(t.id, t.body, t.done)" />
                <label :for="t.id" class="lead fw-normal mb-0 bg-light w-100 ms-n2 ps-2 py-1 rounded"
                    x-text="t.body" x-on:click.prevent="complete(t.id, t.body, t.done)"></label>
            </li>
        </template>
    </template>
</ul>
