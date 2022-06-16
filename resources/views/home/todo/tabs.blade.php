<div class="mb-4 pb-2 row">
<ul class="nav nav-tabs col-9" id="ex1" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link" x-bind:class="{'active': tab === 'all'}" id="ex1-tab-1" data-mdb-toggle="tab" href="#"
            role="tab" aria-controls="ex1-tabs-1" aria-selected="false" x-on:click.prevent="tab = 'all'">All</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" x-bind:class="{'active': tab === 'active'}" id="ex1-tab-2" data-mdb-toggle="tab" href="#" role="tab"
            aria-controls="ex1-tabs-2" aria-selected="false" x-on:click.prevent='tab = "active"'>Active</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" x-bind:class="{'active': tab === 'done'}" id="ex1-tab-3" data-mdb-toggle="tab" href="#" role="tab"
            aria-controls="ex1-tabs-3" aria-selected="false" x-on:click.prevent='tab = "done"'>Completed</a>
    </li>
</ul>
<div class="d-flex justify-content-end align-items-center col-3">
    <p class="small mb-0 ms-4 me-2 text-muted">Tag</p>
    <select class="select">
        <option value="1">Added date</option>
        <option value="2">Due date</option>
    </select>
    <a href="#!" style="color: #23af89;" data-mdb-toggle="tooltip" title="Ascending"><i
            class="fas fa-sort-amount-down-alt ms-2"></i></a>
</div>
</div>