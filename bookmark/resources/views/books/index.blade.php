@extends('layouts/main')

@section('title')
All Books
@endsection

@section('head')
<link href='/css/books/index.css' rel='stylesheet'>
@endsection

@section('content')

<h1>All Books</h1>

@if(count($books) == 0)
<p>No books have been added yet...</p>
@else

 <h2>New Books</h2>
    <ul>
    @foreach($newBooks as $book)
        <li>{{ $book->title }}</li>
     @endforeach
    </ul>

<div id='books'>
    @foreach($books as $slug => $book)
    <a class='book' href='/books/{{ $book->slug }}'>
        <h3>{{ $book->title }}</h3>
        <img class='cover' src='{{ $book->cover_url }}'>
    </a>
    @endforeach
</div>
@endif

@endsection