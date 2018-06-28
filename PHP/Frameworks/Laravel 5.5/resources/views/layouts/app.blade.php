<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('page_css')
    <script>
        var full_path='{{Route('/')}}';
    </script>
</head>
<body>
<?php
$routeArray = app('request')->route()->getAction();

$controllerAction = class_basename($routeArray['controller']);

list($controller, $action) = explode('@', $controllerAction);
?>
<div id="app">

    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ route('/') }}">
                    {{ config('app.name', 'Community') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li class="{{$controller=='HomeController' && $action=='index' ? 'active' : ''}}"><a href="{{Route('home')}}">Events</a>
                    </li>
                    @auth('user')
                        <li class="{{($controller=='ProfileController' && $action=='getAddEventInterest') ? 'active' : ''}}"><a
                                    href="{{Route('add-event-interest')}}">Interests</a></li>
                    @endauth
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest('user')
                        <li class="{{$controller=='LoginController' && $action=='login' ? 'active' : ''}}"><a href="{{ route('login') }}">Login</a></li>
                        <li class="{{($controller=='RegisterController' && $action=='register') ? 'active' : ''}}"><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        <li class="{{($controller=='ProfileController' && $action=='getupdate') ? 'active' : ''}}"><a href="{{ route('profile') }}">My Profile</a></li>
                        <li class="{{($controller=='ProfileController' && $action=='event_list') ? 'active' : ''}}"><a href="{{ route('my-event-list') }}">My Events</a></li>
                        <li class="{{($controller=='ProfileController' && $action=='liked_event_list') ? 'active' : ''}}"><a href="{{ route('liked-event-list') }}">Linked Events</a></li>
                        <li class="{{($controller=='ProfileController' && $action=='getAddEvent') ? 'active' : ''}}"><a href="{{ route('add-event') }}">Add Event</a></li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @if(Session::has('success_msg'))
            <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
        @if(Session::has('error_msg'))
            <div class="alert alert-success">{{ Session::get('error_msg') }}</div>
        @endif
    </div>

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@yield('page_js')
</body>
</html>
