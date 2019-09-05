<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />

    <title>LaravelAnswer</title>

    <!-- Styles -->
</head>

<body>
    <div class="container">
        <h1><b>Ask the question</b></h1>
        <hr />
        <form action="{{ route('questions.store')}}" method="POST">
            <label for="title">Question:</label>
            {{ csrf_field() }}
            <input type="text" name="title" id="title" class="form-control" />
            <label for="description">More information:</label>
            <textarea class="form-control" name="description" id="description" rows="4"></textarea>
            <input type="submit" class="btn btn-primary" value="Submit Question" />
        </form>

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>
