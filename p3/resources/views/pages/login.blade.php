@extends('layouts/main')

@section('title')
    Simplify
@endsection

@section('content')

<div class="mx-3">
    <h2>Login</h2>

    <form action="" method="post">
         {{ csrf_field() }}
        <div class="form-group">
            <input autofocus class="form-control" type="text" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <input class="form-control" type="password" name="password" placeholder="Password">
        </div>
        <input class="btn btn-primary" type="submit" value="Login">
    </form>

    Don't have an account? <a href="{% url 'register' %}">Register here.</a>
</div>

@endsection