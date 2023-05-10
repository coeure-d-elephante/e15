@extends('layouts/main')

@section('title')
    Simplify
@endsection

@section('content')

{{-- @if(!$project)
Project not found. <a href='/personal-projects'>Pick another option</a>
@else --}}

    <form method='POST' action='/personal-project'>

    {{ csrf_field() }}
        <div class="row mx-5 mb-3">
            <select name='project_id' class="form-select" aria-label="Default select example">
                <option {{ old('project' == '0' ? 'selected' : '') }} selected>Select Project
                </option>
                @foreach ($projects as $project)
                    @if ($project->category == 'personal')
                        <option value='{{ $project->id }}' {{ old('project' == '0' ? 'selected' : '') }} selected> {{ $project->project_title }}
                        </option>
                    @endif
                @endforeach
            </select>

            <input type='submit' value='Choose project'>
        </div>
    </form>
@endsection
