<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h3>Insert a new flower</h3>

    <form id="myForm" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="Title"><br>
        <input type="date" name="date"><br>
        <label for="myFile">Upload a file : </label>
        <input type="file" name="file" id="myFile"><br>
        <input type="submit" value="Submit">
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        /* Wait for the page to be loaded/ready */
        $(function() {
            $('#myForm').submit(function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                // Ajax call
                $.ajax({
                        url: "{{ route('submit.ajax.form') }}",
                        //url: 'ajax-answer',
                        method: 'post',
                        data: formData,
                        processData: false,
                        contentType: false
                    })
                    .done(function(result) {
                        // If AJAX call worked
                        console.log(result);
                    })
                    .fail(function(result) {
                        console.log('AJAX FAILED');
                    })
            });
        });
    </script>
</body>

</html>
