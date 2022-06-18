<div class="pb-2 bg-blur" x-data="{
    savingCat: false,
    title: '',
    error: '',
    editMode: '',
    route: '{{ route('api.category.store') }}',
    action: '{{ route('api.category.store') }}',
    save: function() {
        if (this.savingCat || !this.title.length || this.title.length <= 2) return;
        this.savingCat = true;
        this.$refs.form.submit();
    },
    enableEdit: function (slug) {
        if (this.saving || !this.slug.length) return;

        this.editMode = slug;
        this.action = this.route + '/' + slug;
    },
    cancleEdit: function () {
        this.editMode = '';
        this.action = this.route;
    },
}">
    <div class="card bg-transparent border-0">
        <div class="card-body">
            <form method="POST" x-bind:action="action" x-on:submit.prevent="save" x-ref='form'>
                <div class="d-flex flex-row align-items-center">
                    <input type="text" class="form-control form-control-lg border-dark" id="todo-title"
                        placeholder="Add new..." x-model.trim='title' name="title" x-on:keydown.enter="save"
                        maxlength="100" />
                    <div class="col-sm-2 text-center">
                        <button type="submit" class="btn btn-primary mx-2" x-bind:disabled="!title.length || savingCat">
                            <template x-if="savingCat">
                                <div class="spinner-border text-light mx-1" role="status"
                                    style="width: 1.5rem;height: 1.5rem">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </template>
                            <template x-if='!savingCat'>
                                @include('icon.plus-lg')
                            </template>
                        </button>
                        <button type="submit" class="btn btn-danger" x-bind:disabled="!editMode.length || saving"
                            x-on:click.prevent="cancleEdit">
                            @include('icons.x-lg')
                        </button>
                    </div>
                </div>
                @csrf
                <template x-if='editMode'>
                    @method('put')
                </template>
            </form>
            @error('title')
                <div class="invalid-feedback" style="display: block">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
</div>
