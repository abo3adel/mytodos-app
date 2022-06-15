<div class="pb-2" x-data="{
    saving: false,
    body: '',
    error: '',
    save: async function() {
        if (this.saving || !this.body.length) return;
        this.saving = true;
        this.error = '';

        const res = await axios.post('/api/todos', {
            body: this.body,
            category_slug: this.activeCategory
        }).catch(err => this.error = err.response ? err.response.data.errors.body[0] : '');

        this.saving = false;
        if (!res || !res.data) {
            $dispatch('notice', {type: 'error', text: 'Error Saving TODO'})
            return;
        }

        this.body = '';
        $dispatch('add-todo', res.data.data)
        $dispatch('notice', {type: 'success', text: 'Saved'})
    },
}">
    {{-- <h1 x-text='activeCategory'></h1> --}}
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-row align-items-center">
                <input type="text" class="form-control form-control-lg" id="todo-body"
                    placeholder="Add new..." x-model.trim='body' x-on:keydown.enter="save" />
                <div>
                    <button type="button" class="btn btn-primary" x-on:click.prevent="save"
                        x-bind:disabled="!body.length || saving">
                        <template x-if="saving">
                            <div class="spinner-border text-light mx-1" role="status"
                                style="width: 1.5rem;height: 1.5rem">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </template>
                        <template x-if='!saving'>
                            <span>Add</span>
                        </template>
                    </button>
                </div>
            </div>
            <div class="invalid-feedback" style="display: block" x-text="error">
            </div>
        </div>
    </div>
</div>
