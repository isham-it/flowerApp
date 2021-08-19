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
            <li><a href="">Home page</a></li>

            <li><a href="{{ url('flowers') }}">Flowers page</a></li>
            <li><a href="{{ url('new-flower') }}">Create flower page</a></li>
        </ul>
    </nav>
    
    <form action="" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name"><br>

        <input type="number" name="price" placeholder="Price"><br>

        <input type="submit" value="Create flower">
    </form>

    <div class="content">
        @yield('content')
    </div>
</body>

</html>
