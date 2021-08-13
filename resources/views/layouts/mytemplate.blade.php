<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
    <nav>
        <ul>
            <li>Page 1</li>
            <li>Page 2</li>
        </ul>
    </nav>

    <div class="content">
        @yield('content')
    </div>
</body>

</html>