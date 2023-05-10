@extends('layouts/main')

@section('title')
    Simplify
@endsection

@section('content')
    <div class="mx-5">
        @if (Auth::user())
            <h2 style="color:white">
                Hello {{ Auth::user()->name }}!
            </h2>
        @endif
    </div>
    <div class="row mx-5 mb-3">
        <div class="mb-2 mt-2">
            <a class="button-academic" href='/academic-projects'>Academic Projects</a>
        </div>
        <div class="mb-2 mt-2">
            <a class="button-personal" href='/personal-projects'>Personal Projects</a>
        </div>

    </div>
@endsection
