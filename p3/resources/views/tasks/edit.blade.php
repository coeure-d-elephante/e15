{{-- /resources/views/books/create.blade.php --}}
@extends('layouts/main')


@section('title')
    Edit task {{ $task->title }}
@endsection


@section('content')
    <h1>Edit task</h1>

    <form method='POST' action='/tasks/{{ $task->id }}'>
        <div class='details'>* Required fields</div>

        {{ csrf_field() }}
        {{ method_field('put') }}

        <label for='title'>* Title</label>
        <input type='text' name='title' id='title' value='{{ old('title'), $task->title }}'>

        <label for='notes'>Notes</label>
        <textarea name='{{ old('notes'), $task->notes }}'></textarea>


        <label for='status'>* Status</label>
        <input type='text' name='slug' id='status' value='{{ old('status'), $task->status }}'>


        <button type='submit' class='btn btn-primary'>Update</button>


        @if (count($errors) > 0)
            <ul class='alert alert-danger'>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

    </form>
@endsection
