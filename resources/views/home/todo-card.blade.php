<div class="col">
    <div class="card" id="list1" style="border-radius: .75rem; background-color: #eff1f2;" x-data="{
        tab: 'active',
    }">
        <div class="card-body py-4 px-4 px-md-5">

            <p class="h1 text-center mt-3 mb-4 pb-3 text-primary">
                <i class="fas fa-check-square me-1"></i>
                <u>My Todo-s</u>
            </p>

            <div class="">
                @include('home.todo.form')
            </div>

            <hr class="my-4">

            <!-- Tabs navs -->
            @include('home.todo.tabs')
            <!-- Tabs navs -->

            <div class="d-flex justify-content-end align-items-center mb-4 pt-2 pb-3">
                <p class="small mb-0 ms-4 me-2 text-muted">Sort</p>
                <select class="select">
                    <option value="1">Added date</option>
                    <option value="2">Due date</option>
                </select>
                <a href="#!" style="color: #23af89;" data-mdb-toggle="tooltip" title="Ascending"><i
                        class="fas fa-sort-amount-down-alt ms-2"></i></a>
            </div>

            
            @include('home.todo.content')
        </div>
    </div>
</div>