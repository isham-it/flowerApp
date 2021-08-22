@extends('layouts.mytemplate')

@section('title', 'Update flower')

@section('content')

    <h3>Update flower</h3>

    <form action="" method="post">
        <!-- Security token for Laravel : Mandatory in forms -->
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{$flower->name}}"><br>
        <input type="number" name="price" placeholder="Price" value="{{$flower->price}}"><br>
        <label for="type">Choose a type</label>
        <select name="type" id="type" value="{{$flower->type}}"><br> >
            <option value="magnoliophyta">Magnoliophyta</option>
            <option value="asteraceae">Asteraceae</option>
        </select><br>

        <input type="submit" value="Update flower">
    </form>


@endsection
