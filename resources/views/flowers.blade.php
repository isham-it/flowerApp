@extends('layouts.mytemplate')

@section('title', 'Contact page')

@section('content')

    @if($message = Session::get('success'))
        <p style="color:green">{{$message}}</p>
    @endif

    @foreach ($flowers as $flower)
        <p><strong>Name : </strong> {{$flower->name}}</p>
        <p><strong>Price : </strong> {{$flower->price}}</p>
        <!-- creating link using the name of the route (check web.php file)  -->
        <a href="{{ route('update.flower', [$flower->id])}}">Edit</a>
        <a href="{{ route('delete.flower', [$flower->id])}}">Delete</a>
        <a href="{{ route('details.flower', [$flower->id])}}">Details</a>
        <hr>
    @endforeach
@endsection
