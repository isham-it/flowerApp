@extends('layouts.mytemplate')

@section('title', 'Flower detail page')

@section('content')
<h2>Flower details</h2>
<?php echo 'Flower id : ' . $id ?>

<p>Flower id : {{ $id }}</p>
@endsection