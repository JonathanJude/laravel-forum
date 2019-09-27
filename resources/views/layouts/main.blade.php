<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') | MyForum</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>
<body>
    <div id="app">
    <header id="header">
        {{-- <img src="{{ asset('images/logo.png') }}" alt="MyForum" height="60"> --}}
        <h1 class="text-success">MyForum</h1>
        @auth
            <a href=""><img src="{{ public_path() }}/images/avatar.png" alt="Img" width="50" height="50" class="avatar"></a>
        @endauth
        @guest
    <a href="{{ route('login') }}">LOGIN</a>
    <a href="{{ route('register') }}">REGISTER</a>
        @endguest
    </header>
    <div class="container-fluid">
        <aside class="profile">
            @auth
            <img src="{{ public_path() }}/images/avatar.png" alt="Name Surname">
            <h1> {{ auth()->user()->name }}</h1>
            <ul>
            <li><a href="{{route('home') }}">Home</a></li>
                <li><a href="{{route('my_topics') }}">My Topics</a></li>
                <li><a href="{{route('my_comments') }}">My Comments</a></li>
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                    </a>
                </li>
            </ul>
            @endauth

            @guest
            <img src="{{ asset('images/logo.png') }}" alt="Name Surname">
            <h1> Join MyForum </h1>
            <ul>
            <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            </ul>

            @endguest
        </aside>

        <main class="add-course">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <h1 class="text-center main-color">@yield('page_title')</h1>

            <flash message="{{ session('flash')}}" ></flash>

            @yield('content')
        </main>
    </div>


        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

    @include('partials.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
