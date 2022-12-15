<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-danger">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav">
            <li><a class="nav-link nav-mod" href="{{route('home')}}">Home</a></li>
            <li><a class="nav-link nav-mod" href="{{route('about')}}">About</a></li>
            <li><a class="nav-link nav-mod" href="{{route('contact')}}">Contact</a></li>
            <li><a class="nav-link nav-mod" href="{{route('login')}}">Login</a></li>
        </ul>
    </div>
</nav>

@yield('body')

<script src="{{asset('/')}}js/bootstrap.bundle.js"></script>
</body>
</html>
