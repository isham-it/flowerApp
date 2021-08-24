@extends('layouts.mytemplate')

@section('title', 'Login form')

@section('content')

    <h3>Login to our website</h3>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="" method="post">
        <!-- Security token for Laravel : Mandatory in forms -->
        @csrf
        <input type="text" name="username" placeholder="Username"><br>

        <input type="password" name="password" placeholder="Password"><br>

        <input type="submit" value="login">
    </form>
@endsection

@section('content')



