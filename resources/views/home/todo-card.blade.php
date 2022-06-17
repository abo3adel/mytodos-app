{{-- <div class="col">
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
 --}}


<div class="main-container" id="list1" style="border-radius: .75rem;background-color: var(--content-bg);" x-data="{
    tab: 'active',
    todosLength: 5,
    setTab: function (id) {
        this.tab = id;
    },
}">
    <div class="main-header justify-content-center">
        {{-- <a class="menu-link-main" href="#">All Apps</a>
        <div class="header-menu">
            <a class="main-header-link is-active" href="#">Desktop</a>
            <a class="main-header-link" href="#">Mobile</a>
            <a class="main-header-link" href="#">Web</a>

        </div> --}}
        <div class="h1 text-center text-white">
            <div class="fs-1 d-inline-block">
                @include('icons.check_list')
            </div>
            <span>My Todo-s</span>
        </div>
    </div>
    <div class="content-wrapper p-2">
        <div class="content-wrapper-header">
            @include('home.todo.form')
        </div>
        <div class="content-section">
            @include('home.todo.tabs')

            <div class="content-section-title"></div>
            
            @include('home.todo.content')
        </div>
    </div>
</div>
