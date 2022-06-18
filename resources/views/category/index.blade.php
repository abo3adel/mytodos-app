@extends('layouts.glass')

@section('content')
<div class="main-container" style="" x-data="{
    editMode: '',
    savingCat: false,
    title: '',   
    route: '{{ route('api.category.store') }}',
    action: '{{ route('api.category.store') }}',
    save: function() {
        if (this.savingCat || !this.title.length || this.title.length <= 2) return;
        this.savingCat = true;
        this.$refs.form.submit();
    },
    enableEdit: function (title, slug) {
        if (this.savingCat) return;

        this.editMode = slug;
        this.action = this.route + '/' + slug;
        this.title = title;
    },
    cancleEdit: function () {
        this.editMode = '';
        this.action = this.route;
        this.title = '';
    },
}">
    <div class="main-header justify-content-center">
        <div class="h1 text-center text-white todo-header">
            {{-- <h1 class="text-center pt-5"> --}}
            <div class="d-inline-block">
                @include('icons.card-list')
            </div>
            <span>My Categorie-s</span>
            {{-- </h1> --}}
        </div>
    </div>
    <div class="content-wrapper p-2">
        <div class="content-wrapper-header">
            @include('category.form')
        </div>
        <div class="content-section row flex-row" style="margin-left: 0">
            @foreach($categories as $cat)
                <div class="app-card col-6 col-md-4 my-3 mx-1" x-bind:class="{
                    'active': editMode === '{{ $cat->slug }}'
                }">
                    <span>
                        @include('icons.bookmark-heart')
                        {{ $cat->title }}
                    </span>
                    <div class="my-3 h4">
                        <div class="badge bg-primary">
                            @include('icons.check_list')
                            {{ $cat->todos_count }}
                        </div>
                    </div>
                    <div class="app-card-buttons">
                        <button class="btn btn-outline-info mx-1"
                            x-on:click.prevent="enableEdit('{{ $cat->title }}', '{{ $cat->slug }}')">
                            @include('icons.pencil')
                        </button>
                        <button class="btn btn-outline-danger">
                            @include('icons.trash_bin')
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<x-toast />
@endsection
