<html>

<head>
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

<header style="text-align: center; background-color: white; margin-bottom: 10px;">
    <a href="{{ route('admin.index') }}" style="text-decoration: none;"><h1>Administrator</h1></a>
    <ul class="list-unstyled list-inline">
        <li class="list-inline-item"><a href="{{ url('/') }}">Users</a></li>
        {{--<li class="list-inline-item"><a href="{{ route('admin.user.index') }}">Posts</a></li>--}}
        {{--<li class="list-inline-item"><a href="{{ route('admin.user.index') }}">Commentaries</a></li>--}}
        {{--<li class="list-inline-item"><a href="{{ route('admin.user.index') }}">Feedbacks</a></li>--}}
    </ul>
</header>

<main>
    @yield('content')
</main>

<footer>

</footer>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>