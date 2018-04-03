<html>
<head>
    <title>@yield('title')</title>
    <link href="{{URL::asset('css/app.css')}}" rel="stylesheet">


</head>
<body>
<header>
    @section('login-bar')
    @show

        <div class="container clear" id="cont_entete_profil">
            <img class="img-fluid" src="images/banner_hs.png">
            <!-- ======================================================================= -->
            <nav class="navbar navbar-expand-lg navbar-light" id="navbar_profil">
                <a class="navbar-brand" href="accueil.php">Accueil</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="navbar-brand" href="categories.php">Catégories</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="membres.php">Membres</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="profil.php">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="preferences.php">Préférences</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Post, Pseudo, .." aria-label="Search">
                        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Rechercher</button>
                    </form>
                </div>
            </nav>
        </div>
        <!-- ======================================================================= -->
</header>

<div>
    @yield('content')
</div>

    @section('footer')
    @show

</body>
</html>