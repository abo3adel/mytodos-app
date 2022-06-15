<div class="pb-2" x-data="{
    saving: false,
    body: '',
    error: '',
    save: async function() {
        if (this.saving) return;
        this.saving = true;

        const res = await axios.post('/todos', {
            body: this.body,
            category_slug: this.activeCategory
        });
    },
}">
    {{-- <h1 x-text='activeCategory'></h1> --}}
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-row align-items-center">
                <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1"
                    placeholder="Add new..." x-model='body'>

                <div>
                    <button type="button" class="btn btn-primary" x-on:click="save" x-bind:disabled="!body.length || saving">
                        <template x-if="saving">
                            <div class="spinner-border text-light mx-1" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </template>
                        <template x-if='!saving'>
                            <span>Add</span>
                        </template>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
