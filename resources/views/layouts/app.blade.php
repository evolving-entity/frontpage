<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>frontPAGE</title>

        <link rel="stylesheet" href="{{ asset ('css/app.css') }}">
        <link rel="shortcut icon" href="{{ asset('img/favicon.svg') }}" type="image/x-icon">
    </head>
    <body class="bg-gray-200">
        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">
                <li>
                    <a href="" class="p-6">Home</a>
                </li>
                <li>
                    <a href="{{ route('dashboard') }}" class="p-6">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('posts') }}" class="p-6">Post</a>
                </li>
            </ul>
            <ul class="flex items-center">
                @auth
                <li>
                    <a href="" class="p-6">{{auth()->user()->name}}</a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="p-6 inline">Logout</button>
                    </form>
                </li>
                @endauth
                @guest
                <li>
                    <a href="{{ route('login') }}" class="p-6">Login</a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="p-6">Register</a>
                </li>
                @endguest
            </ul>
        </nav>
        @yield('content')
    </body>
</html>