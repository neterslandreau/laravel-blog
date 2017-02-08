<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link href="/css/app.css" rel="stylesheet">

</head>

<body>

@include('layouts.nav')

@if ($flash = session('message'))

<div class="alert alert-success" role="alert">
    {{ $flash }}
</div>

@endif

<div class="container">

    <div class="row">

        @yield ('content')

        @if (!(request()->is('home') || (request()->is('login')) || (request()->is('register'))))

        @include ('layouts.blog-sidebar')

        @endif

    </div>

</div>

@include('layouts.footer')

</body>
</html>
