@extends('layouts/main')

@section('content')
  

    
    <div class="container">
      <h1 class="text">Login</h1>
      <p class="text"> Don’t have an account?</p>
      <a href='/register'>Register here...</a>
        <div class="row justify-content-md-center">
            <form method='POST' action='/login'>

                {{ csrf_field() }}
                <div class="form-group">
                    <label for='email'>E-Mail Address</label>
                    <input class="form-control" id='email' name='email' type='email' value='{{ old('email') }}'
                        autofocus>
                    @include('includes.error-field', ['fieldName' => 'email'])

                    <label for='password'>Password</label>
                    <input class="form-control" id='password' name='password' type='password'>
                    @include('includes.error-field', ['fieldName' => 'password'])

                    <label style="color:white">
                        <input name='remember' type='checkbox' {{ old('remember') ? 'checked' : '' }}>
                        Remember Me
                    </label>
                </div>
                <button class='btn btn-primary' type='submit'>Login</button>
                </a>
            </form>
        </div>
    </div>
@endsection
