@extends('layouts/main')

@section('title')
    Create Task
@endsection

@section('content')
    <h1>Create Task</h1>

    <div class="container">
        <div class="row justify-content-md-center">
            <form method='POST' action='/store'>

                <h2 style="color:red">* Required fields </h2>

                {{ csrf_field() }}
                <div class="form-group">
                 <select name='project_id' class="form-select" aria-label="Default select example">
                <option {{ old('project' == '0' ? 'selected' : '') }} selected>Select Project
                </option>
                @foreach ($projects as $project)
                        <option value='{{ $project->id }}' {{ old('project' == '0' ? 'selected' : '') }} selected> {{ $project->project_title }}
                        </option>
                @endforeach
            </select>
                    <label for='title' style="color:white">*title</label>
                    <input class="form-control" id='title' name='title' type='text' value='{{ old('title') }}'>
                </div>
                <div class="form-group">
                    <label for='notes' style="color:white">*notes</label>
                    <textarea class="form-control" name='notes' value='{{ old('notes') }}'></textarea>
                </div>
                <div class="form-group">
                    <label for='status' style="color:white">*status</label>
                    <select class="form-select" aria-label="Select Status">
                        <option value="" {{ old('status' == 'to-do' ? 'selected' : '') }} selected>To-do
                        </option>
                        <option {{ old('status' == 'in progress' ? 'selected' : '') }} selected>In-progress
                        </option>
                         <option {{ old('status' == 'done' ? 'selected' : '') }} selected>Done
                        </option>
                    </select>
                </div>

                <button class='btn btn-primary' type='submit'>Add Task</button>

                @if (count($errors) > 0)
                    <ul class='alert alert-danger'>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </form>
        </div>

    </div>

@endsection
