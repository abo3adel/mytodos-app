<div class="pb-2 bg-blur">
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
                                <div class="spinner-border text-light mx-1 spinner-border-sm" role="status"
                                    style="width: 1.5rem;height: 1.5rem">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </template>
                            <template x-if='!savingCat'>
                                <div>
                                    <span x-show="!editMode.length">
                                        @include('icon.plus-lg')
                                    </span>
                                    <span x-show='editMode.length'>
                                        @include('icons.send-check')
                                    </span>
                                </div>
                            </template>
                        </button>
                        <button type="submit" class="btn btn-danger" x-bind:disabled="!editMode.length || savingCat"
                            x-on:click.prevent="cancleEdit"
                            x-show="editMode.length">
                            @include('icons.x-lg')
                        </button>
                    </div>
                </div>
                @csrf
                <template x-if='editMode.length'>
                    @method('patch')
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
