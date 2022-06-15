@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" x-data="{
        todos: [{}],
        loading: true,
        activeCategory: '',
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
        <div class="col-3 px-0">
            @include('home.categories-list')
        </div>
        <div class="col-9"
            x-init="loadTodos('{{ $categories->first()->slug }}');activeCategory = '{{ $categories->first()->slug }}'">

            <div>
                @include('home.todo-card')
            </div>

            <button x-data x-on:click="$dispatch('notice', {type: 'error', text: 'Error!'})"
                class="m-4 bg-red-500 text-lg font-bold p-6 py-2 text-white shadow-md rounded">
                Error
            </button>
        </div>
    </div>
    <x-toast />
    @endsection
