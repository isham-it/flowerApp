<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a flower </title>
</head>

<body>
    <form action="" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name"><br>

        <input type="number" name="price" placeholder="Price"><br>

        <label for="type">Choose a type</label>
        <select name="type" id="type">
            <option value="magnoliophyta">Magnoliophyta</option>
            <option value="asteraceae">Asteraceae</option>
        </select><br>


        <input type="submit" value="Create flower">
    </form>
</body>

</html>
