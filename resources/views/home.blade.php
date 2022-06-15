@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row" x-data="{
        todos: [{}],
        loading: true,
        loadTodos: async function (categorySlug) {
            const res = await axios.get('/api/category/' + categorySlug);

            {{-- console.log(res, res.data, this.todos) --}}

            this.loading = false;
            if (!res || !res.data.data) {
                $dispatch('notice', {type: 'error', text: 'Error loading todos'})
                return;
            }

            this.todos = res.data.data.todos.data
        },
    }">
        <div class="col-8 bg-white">
            <a href="/"
                class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
                <svg class="bi pe-none me-2" width="30" height="24">
                    <use xlink:href="#bootstrap" /></svg>
                <span class="fs-5 fw-semibold">
                    Categories
                </span>
            </a>
            <div class="list-group list-group-flush border-bottom scrollarea">
                @foreach($categories as $cat)
                    <button type="button" x-on:click.prevent="loadTodos('{{ $cat->slug }}')"
                        class="list-group-item list-group-item-action py-3 lh-sm category-item" aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <strong class="mb-1">
                                {{ $cat->title }}
                            </strong>
                            <span class="badge bg-primary rounded-pill">
                                {{ $cat->todos_count }}
                            </span>
                        </div>
                    </button>
                @endforeach
            </div>
        </div>
        <div class="col-9" x-init="loadTodos('{{$categories->first()->slug}}')">
            <ul class="list-group list-group-flush">
                <template x-for="t in todos" :key="t.id">
                    <li class="list-group-item" x-text="t.body"></li>
                </template>
                <button x-data
                x-on:click="$dispatch('notice', {type: 'error', text: 'Error!'})"
                class="m-4 bg-red-500 text-lg font-bold p-6 py-2 text-white shadow-md rounded">
                Error
            </button>
            </ul>
        </div>
    </div>
    <x-toast />
    @endsection
