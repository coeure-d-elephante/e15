@extends('layouts/main')

@section('title')
    Simplify
@endsection

@section('content')
    <form method='POST' action='/'>
        <div class="row mx-5 mb-3">
            <select class="form-select" aria-label="Default select example">
                <option {{ old('project' == '0' ? 'selected' : '') }} selected>Select Project
                </option>
                @foreach ($projects as $project)
                    @if ($project->category == 'academic')
                        <option {{ old('project' == '0' ? 'selected' : '') }} selected> {{ $project->project_title }}
                        </option>
                    @endif
                @endforeach
            </select>
        </div>
    </form>

    @foreach ($tasks as $task)
        <div class="row mx-5 mb-3">
            <div class="col-sm">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $task->title }}</h5>
                        <p class="card-text">{{ $task->notes }}</p>
                        @if ($task->status == 'done')
                            <a href="#" class="btn btn-success">Done</a>
                            @if ($task->status == 'in progress')
                                <a href="#" class="btn btn-danger">In Progress</a>
                            @endif
                            @if ($task->status == 'to-do')
                                <a href="#" class="btn btn-warning">To-do</a>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach
