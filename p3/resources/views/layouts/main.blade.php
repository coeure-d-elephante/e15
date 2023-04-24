<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title')</title>
    <meta charset='utf-8'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href='/css/simplify.css' rel='stylesheet'>

    @yield('head')
</head>
<body>

{{-- @if(session('flash-alert'))
    <div class='flash-alert'>
        {{ session('flash-alert') }}
    </div>
@endif --}}

<header>
    <a href='/'><img src='' id='logo' alt='logo'></a>

    <nav>
        <ul>
            <li><a href='/'>Home</a></li>
            <li><a href='/academic-projects'>Academic Projects</a></li>
            <li><a href='/personal-projects'>Personal Projects</a></li>
               <li><a href='/contact'>Contact Me</a></li>
            <li>
            @if(!Auth::user())
                <a href='/login'>Login</a>
            @else
                <form method='POST' id='logout' action='/logout'>
                    {{ csrf_field() }}
                    <a href='#' onClick='document.getElementById("logout").submit();'>Logout</a>
                </form>
            @endif
        </li>
        </ul>
    </nav>
</header>

<section id='main'>
    @yield('content')
</section>

<footer>
    &copy; Simplify {{ config('mail.contact_email') }}
</footer>

</body>
</html>