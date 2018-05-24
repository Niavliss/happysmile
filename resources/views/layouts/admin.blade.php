<html>

<head>
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

<header style="text-align: center; background-color: white; margin-bottom: 10px;">
    <a href="{{ route('admin_page') }}" style="text-decoration: none;"><h1>Administrator</h1></a>
    <ul class="list-unstyled list-inline">
        <li class="list-inline-item"><a href="{{ route('users_admin_page') }}">Users</a></li>
        <li class="list-inline-item"><a href="{{ route('posts_admin_page') }}">Posts</a></li>
        <li class="list-inline-item"><a href="{{ route('commentaries_admin_page') }}">Commentaries</a></li>
        <li class="list-inline-item"><a href="{{ route('feedbacks_admin_page') }}">Feedbacks</a></li>
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