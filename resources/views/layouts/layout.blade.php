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
 <nav class="navbar navbar-expand-lg py-3 navbar-dark fixed-top bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{route('main')}}"><span class="text-warning">web</span>blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse  text-warning" id="navmenu">
            <ul class="navbar-nav ms-auto">
                @auth
                    @if(Auth::user()->status==1)
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('moderator_index')}}">moderation</a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href={{Route('create_post')}}>create blog <i class="bi bi-plus-circle-fill"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-warning" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                            <i class="bi bi-box-arrow-in-right"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href={{Route('login')}}><i class="bi bi-door-open"></i>sign in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{Route('register')}}>sign up</a>
                </li>
                @endauth
            </ul>
        </div>

    </div>
 </nav>
    <div id="app">
        <main class="container py-4">
            @yield('content')
        </main>
    </div>
 <footer class="bg-dark text-white p-3">
     <div class="container">
         <p>&copy; 2023 Your Website</p>
     </div>
 </footer>
</body>
</html>
