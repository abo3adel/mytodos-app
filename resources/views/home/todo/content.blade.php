<!-- Tabs content -->
{{-- <div class="tab-content" id="ex1-content"> --}}
{{-- <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1"> --}}
<ul class="list-group">
    <template x-for="t in todos" :key="t.id">
        <template x-if="tab === 'all' ||
                (tab === 'active' && !t.done) ||
                (tab === 'done' && t.done)">
            <li class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
                <p class="lead fw-normal mb-0 bg-light w-100 ms-n2 ps-2 py-1 rounded" x-text="t.body"></p>
            </li>
        </template>
    </template>
</ul>
{{-- </div> --}}
{{-- </div> --}}
