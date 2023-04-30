@extends('layouts/main')

@section('title')
    Simplify
@endsection

@section('content')
    <div class="row mx-5 mb-3">
        <select class="form-select" aria-label="Default select example">
            <option selected>Select Project</option>
            <option value="1">Chess Game</option>
            <option value="2">Create email app</option>
            <option value="3">Replicate Google as a Clone</option>
        </select>
    </div>

    {{-- @foreach ($tasks as $task) --}}
    <div class="row mx-5 mb-3">
        <div class="col-sm">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Task title</h5>
                    <p class="card-text">notes</p>
                    <a href="#" class="btn btn-success">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Task title</h5>
                    <p class="card-text">notes</p>
                    <a href="#" class="btn btn-danger">To-do</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Task title</h5>
                    <p class="card-text">notes</p>
                    <a href="#" class="btn btn-warning">In progress</a>
                </div>
            </div>
        </div>
    </div>
    {{-- @endforeach --}}
@endsection
