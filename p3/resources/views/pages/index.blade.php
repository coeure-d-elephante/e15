@extends('layouts/main')

@section('title')
    Simplify
@endsection

@section('content')
    @if (Auth::user())
        <h2>
            Hello {{ Auth::user()->name }}!
        </h2>
    @endif
    <div class="row mx-5 mb-3">

        <div class="mb-2 mt-2">
            <a href='/academic-projects' class="button-academic">Academic Projects</a>
        </div>
        <div class="mb-2 mt-2">
            <a href='/personal-projects' class="button-personal">Personal Projects</a>
        </div>

    </div>
@endsection
