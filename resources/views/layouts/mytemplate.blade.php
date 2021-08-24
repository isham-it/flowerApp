<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>

    <nav>
        <ul>
            <li><a href="{{ url('home') }}">Index</a></li>
            <li><a href="{{ url('flowers') }}">Flowers page</a></li>
            <li><a href="{{ url('new-flower') }}">Create flower page</a></li>
            <li><a href="{{ url('login') }}">login</a></li>
            <li><a href="{{ url('register') }}">register</a></li>
        </ul>
    </nav>




    <div class="content">
        @yield('content')

    </div>

    <footer>
        <p>This is my SPECIAL footer</p>
    </footer>
</body>

</html>
