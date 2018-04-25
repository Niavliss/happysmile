<html>
<head>
    <title>@yield('title')</title>
    <link href="{{URL::asset('css/all.css')}}" rel="stylesheet">


</head>
<body>
<header>
        <div id="ligne_connexion">
            <div class="container">
                <ul class="text-right">
                    <!-- ======================================================================= -->
                    @guest
                        <li><a class="btn btn-warning" href="{{ route('login') }}">{{ __('Connexion') }}</a></li>
                        <li><a class="btn btn-warning" href="{{ route('register') }}">{{ __('Inscription') }}</a></li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('front_profile') }}">{{ __('Profil') }}</a>
                                <a class="dropdown-item" href="{{ route('front_settings') }}">{{ __('Paramètres') }}</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Se déconnecter') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                @endguest
                    <!-- ======================================================================= -->
                </ul>
            </div>
        </div>


        <!-- =============================BANNER========================================== -->
        <div class="container clear" id="cont_entete_profil">
            <img class="img-fluid" src="{{URL::asset('img/banner_hs.png')}}" alt="banniere">
            <!-- =============================NAV-BAR========================================== -->
            @guest
                <nav class="navbar navbar-expand-lg navbar-light" id="navbar_profil">
                    <a class="navbar-brand" href="/">Accueil</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="navbar-brand" href="{{ route('front_categories') }}">Catégories</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Post, Pseudo, .." aria-label="Search">
                            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Rechercher</button>
                        </form>
                    </div>
                </nav>
            @else
            <nav class="navbar navbar-expand-lg navbar-light" id="navbar_profil">
                <a class="navbar-brand" href="/">Accueil</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="navbar-brand" href="{{ route('front_categories') }}">Catégories</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="{{ route('front_members') }}">Membres</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="{{ route('front_profile') }}">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="{{ route('front_settings') }}">Paramètres</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Post, Pseudo, .." aria-label="Search">
                        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Rechercher</button>
                    </form>
                </div>
            </nav>
            @endguest
        </div>
</header>
        <!-- ================================CONTENT======================================= -->


<div>
    @yield('content')
</div>

        <!-- =============================FOOTER========================================== -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>&copy;Happy Smile 2018</p>
            </div>
        </div>
    </div>
</footer>

<script src="{{URL:: asset('js/all.js')}}"></script>
</body>
</html>