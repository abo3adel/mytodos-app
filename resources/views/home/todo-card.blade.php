<div class="col">
    {{-- https://codepen.io/TurkAysenur/full/ZEpxeYm --}}
    <div class="card bg-blur text-white" id="list1" style="border-radius: .75rem;background-color: var(--content-bg);" x-data="{
        tab: 'active',
        todosLength: 5,
        setTab: function (id) {
            this.tab = id;
        },
    }">
        <div class="card-body py-4 px-4">

            <div class="h1 text-center mt-3 mb-4 pb-3 text-primary">
            <div class="fs-1 d-inline-block">
                @include('icons.check_list')
            </div>
                <span>My Todo-s</span>
            </div>

            <div class="">
                @include('home.todo.form')
            </div>

            <hr class="my-4">

            <!-- Tabs navs -->
            @include('home.todo.tabs')
            <!-- Tabs navs -->
            
            @include('home.todo.content')
        </div>
    </div>
</div>