<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>All Cars</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand" href="{{ url('/car') }}">Cars and Reviews</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse right" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href={{ url('car') }}>View all Cars</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ url('addcar') }}>Cars form</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ url('addreview') }}>Reviews form</a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')
</body>
<script src='js/jquery.js'></script>
<script src='js/bootstrap.min.js'></script>

</html>