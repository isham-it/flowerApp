<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="">Home page</a></li>
            <li><a href="{{ url('contact') }}">Contact page</a></li>
            <li><a href="{{ url('flowers') }}">Flowers page</a></li>
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