<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title')</title>
    <meta charset='utf-8'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        html {
            /* http://snook.ca/archives/html_and_css/font-size-with-rem */
            font-size: 62.5%;

            color: #111;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            background-color: gray;
        }

        body {
            /* Default font-size */
            font-size: 1.6rem;

            padding: 0;
            margin: 0;

            /* https://philipwalton.github.io/solved-by-flexbox/demos/sticky-footer/ */
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        section#main {
            /* https://philipwalton.github.io/solved-by-flexbox/demos/sticky-footer/ */
            flex: 1;

            text-align: center;
            width: 80%;
            max-width: 900px;
            margin: auto;
            padding-bottom: 50px;
        }

        header {
            text-align: center;
            margin-top: 20px;
        }

        footer {
            text-align: center;
            background-color: #eee;
            padding: 20px;
        }

        input + label {
            padding-bottom: 2px;
            margin-bottom: 7px;
        }

        input[type='checkbox'] + label {
            display: inline; 
            font-weight: normal;
        }

        .details {
            color: red;
        }

        #pic {
            width: 500px;
            height: 700px;
            margin-bottom: 7px;
        }

        .btn {
            margin-top: 20px;
            margin-bottom: 15px;
            font-size: 1.5rem;
        }
    </style>

    @yield('head')
</head>
<body>

<header>
    <a href='/'><img  src='/images/receipt.png' id='pic' alt='receipt picture'></a>
</header>

<section id='main'>
    @yield('content')
</section>

<footer>
    &copy; Price Discount Calculator.
</footer>

</body>
</html>