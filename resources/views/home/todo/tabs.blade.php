<ul class="nav nav-tabs mb-4 pb-2" id="ex1" role="tablist">
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