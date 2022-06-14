@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-3 bg-white">
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
                    <a href="#" class="list-group-item list-group-item-action py-3 lh-sm" aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <strong class="mb-1">
                                {{ $cat->title }}
                            </strong>
                            <span class="badge bg-primary rounded-pill">
                                {{ $cat->todos_count }}
                            </span>
                        </div>
                        {{-- <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div> --}}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    @endsection
