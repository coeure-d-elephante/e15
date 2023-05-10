@extends('layouts/main')

@section('title')
    Simplify
@endsection

@section('content')
    <form method='POST' action='/academic-project'>

    {{ csrf_field() }}
        <div class="row mx-5 mb-3">
            <select name='project_id' class="form-select" aria-label="Default select example">
                <option {{ old('project' == '0' ? 'selected' : '') }} selected>Select Project
                </option>
                @foreach ($projects as $project)
                    @if ($project->category == 'academic')
                        <option value='{{ $project->id }}' {{ old('project' == '0' ? 'selected' : '') }} selected> {{ $project->project_title }}
                        </option>
                    @endif
                @endforeach
            </select>

            <input type='submit' value='Choose project'>
        </div>
    </form>
@endsection
