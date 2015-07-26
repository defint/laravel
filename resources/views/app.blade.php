<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @yield('title')
    <script src="{!! asset('js/jquery.js') !!}"></script>
    <script src="{!! asset('js/uikit.min.js') !!}"></script>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/uikit.almost-flat.min.css') !!}">
</head>
<body>

<nav class="uk-navbar">
    <a href="/" class="uk-navbar-brand">My Editor</a>

    <ul class="uk-navbar-nav">
        <li class="{{Request::is('/') ? 'uk-active' : ''}}"><a href="/">Home</a></li>
        <li class="{{Request::is('articles') ? 'uk-active' : ''}}"><a href="{{ action('ArticlesController@index') }}">Articles</a></li>
        <li class="{{Request::is('articles/create') ? 'uk-active' : ''}}"><a href="{{ action('ArticlesController@create') }}">Create article</a></li>
    </ul>

    <div class="uk-navbar-flip">
        <div class="uk-navbar-content">

            @if(Auth::user())
                <span>Logged as {{ Auth::user()->name }}, </span>
                <a href="/auth/logout">logout</a>

            @else
                <a href="/auth/login">Sign in</a>
            @endif
        </div>
    </div>
</nav>

@yield('content')

</body>
</html>