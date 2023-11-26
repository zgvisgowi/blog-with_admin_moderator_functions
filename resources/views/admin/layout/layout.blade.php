<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <style>
        body::before{
            display: block;
            content:'';
            height: 75px;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg py-3 navbar-dark fixed-top bg-dark">
    <div class="container">



        <a class="navbar-brand" href="/admin">
            <span class="text-primary">admin</span> page
        </a>
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-primary" href="{{route('posts_list')}}">posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="{{route('users_list')}}">users</a>
                </li>
                <li class="nav-item">
                    <form action="{{route('admin_logout')}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-link"><i class="bi bi-door-closed-fill text-light"></i></button>
                    </form>
                </li>

            </ul>
        </div>
    </div>

</nav>
<!-- Sidebar -->


<!-- Main content -->
<div class="container">
    @yield('content')
    <!-- Place your content here -->
</div>
</body>
</html>
