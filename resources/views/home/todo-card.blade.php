<div class="main-container" id="list1" style="border-radius: .75rem;" x-data="{
    tab: 'active',
    todosLength: 5,
    setTab: function (id) {
        this.tab = id;
    },
}">
    <div class="main-header justify-content-center">
        <div class="h1 text-center text-white todo-header">
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
