@extends('layouts/main')

@section('title')
    Create Task
@endsection

@section('content')
    <h1>Create Task</h1>

    <form method='POST' action='/tasks'>
        <div class='details'>* Required fields</div>

        {{ csrf_field() }}

        <label for='title'>* Title</label>
        <input type='text' name='title' id='title' value='{{ old('title') }}'>

        <label for='notes'>Notes</label>
        <textarea name='notes' value='{{ old('notes') }}'></textarea>

        <label for='status'>* status</label>
        <input type='text' name='author' id='status' value='{{ old('status') }}'>


        <button type='submit' class='btn btn-primary'>Add Task</button>

        @if (count($errors) > 0)
            <ul class='alert alert-danger'>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </form>
@endsection
