@extends('layouts.mytemplate')

@section('title', 'Create a new user')

@section('content')

    <h3>Add a new user</h3>

    <div id="results"></div>
    <form action="" method="post">
        <!-- Security token for Laravel : Mandatory in forms -->
        @csrf
        <input type="text" name="surname" placeholder="Surname"><br>
        <input type="text" name="mail" placeholder="mail"><br>
        <input type="text" name="password" placeholder="password"><br>

        <input type="submit" value="Add user">
    </form>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        /* Wait for the page to be loaded/ready */
        $(function() {
            $('form').submit(function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                // Ajax call
                $.ajax({
                        url: "user-form",
                        method: 'post',
                        data: formData,
                        processData: false,
                        contentType: false,
                        dataType: 'json'
                    })
                    .done(function(result) {
                        $('#results').html('');
                        // Did we get errors or success ?
                        if (result.errors) {
                            for (const error of result.errors) {
                                $('#results').append(error + "<br>");
                            }
                        } else if (result.success) {
                            $('#results').html(result.success);
                        }
                    })
                    .fail(function(result) {
                        console.log('AJAX FAILED');
                    })
            });
        });
    </script>
@endsection
