<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />

    <title>Laravel</title>

    <!-- Styles -->
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a> @else
            <a href="{{ route('login') }}">Login</a> @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a> @endif @endauth
        </div>
        @endif

        <div class="container">
            <div class="jumbotron">
                <h1>Ask the question</h1>
                <p>
                    Ask any question you want to know about Laravel and we will get answer for you!
                </p>
                <p>
                    <a href="#" class="btn btn-primary btn-lg" role="button">Ask Now
                        </a>
                </p>
                <h2>Recent question:</h2>
            </div>
        </div>
    </div>
</body>

</html>