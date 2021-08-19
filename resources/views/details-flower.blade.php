@extends('layouts.mytemplate')

@section('title', 'Detail page')


<form action="" method="post">
    @csrf
    <input type="text" name="comment" placeholder="comment"><br>

    <input type="submit" value="Comment flower">
</form>


@section('content')
    <p><strong>Name : </strong> {{$flower->name}}</p>
    <p><strong>Price : </strong> {{$flower->price}}</p>
    <p><strong>Comment : </strong>{{$flower->comments}}</p>




@endsection
