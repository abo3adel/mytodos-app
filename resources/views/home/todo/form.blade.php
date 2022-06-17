<div class="pb-2 bg-blur" x-data="{
    saving: false,
    body: '',
    error: '',
    tag: null,
    user_tag: '',
    save: async function() {
        if (this.saving || !this.body.length) return;
        this.saving = true;
        this.error = '';

        const res = await axios.post('/api/todos', {
            body: this.body,
            category_slug: this.activeCategory,
            user_tag: this.user_tag,
            tag: this.tag,
        }).catch(err => {
            this.saving = false;
            this.error = err.response ? err.response.data.errors.body[0] : ''
        });

        this.saving = false;
        if (!res || !res.data) {
            $dispatch('notice', {type: 'error', text: 'Error Saving TODO'})
            return;
        }

        this.body = '';
        this.user_tag = '';
        this.tag = null;
        {{-- console.log(res.data.data); --}}
        $dispatch('add-todo', {slug: this.activeCategory, todo: res.data.data})
        $dispatch('notice', {type: 'success', text: 'Saved'})
    },
}">
    <div class="card bg-transparent border-0">
        <div class="card-body">
            <div class="d-flex flex-row align-items-center">
                <input type="text" class="form-control form-control-lg border-dark" id="todo-body" placeholder="Add new..."
                    x-model.trim='body' x-on:keydown.enter="save" />
                <div>
                    <button type="button" class="btn btn-primary" x-on:click.prevent="save"
                        x-bind:disabled="!body.length || saving || user_tag.length > 10">
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
        <div class="card-footer">
            <div class="btn-toolbar mb-3 justify-content-center" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group me-2 mb-2" role="group" aria-label="First group">
                    <input type="radio" class="btn-check" name="btnradio" id="urgent-tag" autocomplete="off" x-bind:disapled="saving" x-model.trim="tag" value="1">
                    <label style="text-transform: uppercase;" class="btn btn-outline-danger text-white" for="urgent-tag">Urgent</label>

                    <input type="radio" class="btn-check" name="btnradio" id="easy-tag" autocomplete="off" x-bind:disapled="saving" x-model.trim="tag" value="2">
                    <label style="text-transform: uppercase;" class="btn btn-outline-success text-white" for="easy-tag">easy</label>

                    <input type="radio" class="btn-check" name="btnradio" id="help-tag" autocomplete="off" x-bind:disapled="saving" x-model.trim="tag" value="3">
                    <label style="text-transform: uppercase;" class="btn btn-outline-info text-white" for="help-tag">needs help!</label>
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-text" id="user-defined-tag">#</div>
                    <input type="text" class="form-control border-white" placeholder="or add yours"
                        aria-label="or add yours" aria-describedby="user-defined-tag" x-model.trim="user_tag" maxlength="10" x-bind:disapled="saving" x-bind:readonly="saving">
                </div>
            </div>
        </div>
    </div>
</div>
