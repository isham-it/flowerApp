@extends('layouts.mytemplate')

@section('title', 'flowers list')

@section('content')

<h2>Flowers list</h2>

@if(count($flowers)>0)

    @foreach($flowers as $flower)
    
        <ul>Name: {{ $flower->name }}</ul>
        <ul>Price: {{ $flower->price }} </ul>
        

    
    @endforeach

@endif


@endsection