@extends('layouts.glass')

@section('content')
<div class="container-fluid px-3">
    <div class="row" x-data="{
        todos: [],
        loadingTodos: false,
        activeCategory: '',
        loadTodos: async function (categorySlug) {
            if (this.loadingTodos || this.activeCategory === categorySlug) return;
            this.loadingTodos = true;
            const res = await axios.get('/api/category/' + categorySlug);

            this.loadingTodos = false;
            this.activeCategory = categorySlug;
            if (!res || !res.data.data) {
                $dispatch('notice', {type: 'error', text: 'Error loading todos'})
                return;
            }

            this.todos = res.data.data.todos.data
        },
        completeTodo: function(tid) {
            
        },
    }" x-on:add-todo.window="todos.push($event.detail.todo)" x-on:complete-todo.window="todos.map(x => {
        if (x.id === $event.detail) {
            x.done = !x.done;
        }
        return x;
    })" x-on:delete-todo.window="todos.splice(todos.findIndex(x => x.id === $event.detail.id), 1)">
        <div class="col-0 col-md-3 px-0 d-none d-md-block">
            @include('home.categories-list')
        </div>
        <div class="col-12 col-md-9"
            x-init="loadTodos('{{ session()->has('slug') ? session()->get('slug') : $categories->first()->slug }}');activeCategory = '{{ session()->has('slug') ? session()->get('slug') : $categories->first()->slug }}'">

            <div>
                @include('home.todo-card')
            </div>
        </div>
        @include('home.left-offcanvas')
    </div>
    <x-toast />
    @endsection
