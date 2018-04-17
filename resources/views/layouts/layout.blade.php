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
                    <li><button class="btn btn-warning" data-toggle="modal" data-target="#modal_connexion">Connexion</button>
                        <div class="modal fade" id="modal_connexion" tabindex="-1" role="dialog" aria-labelledby="ModalConnexionTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ModalConnexionTitle">Connexion</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="accueil.blade.php" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Adresse mail</label>
                                                <input type="email" class="form-control" name="input_mail" aria-describedby="emailHelp" placeholder="Enter email">
                                                <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre adresse mail.</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Mot de passe</label>
                                                <input type="password" class="form-control" name="input_password" placeholder="Password">
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="checkbox_connexion">
                                                <label class="form-check-label" for="checkbox_connexion">Se souvenir de moi</label>
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-warning" id="b_connexion">Connexion</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- ======================================================================= -->
                    <li><button class="btn btn-warning" data-toggle="modal" data-target="#modal_inscription">Inscription</button>
                        <div class="modal fade" id="modal_inscription" tabindex="-1" role="dialog" aria-labelledby="ModalInscriptionTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ModalInscriptionTitle">Inscription</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="FormuInscription" method="post">
                                            <div class="form-group">
                                                <label for="AdMail">Adresse Mail</label>
                                                <input type="email" class="form-control" id="AdMail" placeholder="name@example.com">
                                            </div>
                                            <div class="form-group">
                                                <label for="Pseudo">Pseudo</label>
                                                <input type="text" class="form-control" id="Pseudo" placeholder="Pseudo (minimum 4 caractères)" taille="4">
                                            </div>
                                            <div class="form-group">
                                                <label for="flatpickr">Date de naissance</label>
                                                <input id="flatpickr" type="text" class="form-control selector" placeholder="jj-mm-aaaa">
                                            </div>
                                            <div class="form-group">
                                                <label for="Mdp">Mot de Passe</label>
                                                <input type="password" class="form-control" id="Mdp" placeholder="*********" taille=2>
                                            </div>
                                            <div class="form-group">
                                                <label for="Mdp2">Confirmation du mot de Passe</label>
                                                <input type="password" class="form-control" id="Mdp2" placeholder="*********">
                                            </div>
                                            <div class="form-group mb-4">
                                                <p> En cochant cette case vous déclarez avoir lu la charte d\'Happy Smile et être en accord avec celle-ci.
                                                    <input type="checkbox" name="choix"  id="choix"></p>
                                            </div>
                                            <button type="submit" class="btn btn-lg btn-warning btn-block" id="envoi">S'inscrire</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- ======================================================================= -->
                </ul>
            </div>
        </div>


        <!-- =============================BANNER========================================== -->
        <div class="container clear" id="cont_entete_profil">
            <img class="img-fluid" src="img/banner_hs.png" alt="banniere">
            <!-- =============================NAV-BAR========================================== -->
            <nav class="navbar navbar-expand-lg navbar-light" id="navbar_profil">
                <a class="navbar-brand" href="home">Accueil</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="navbar-brand" href="index">Catégories</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="members">Membres</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="profile">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="settings">Paramètres</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Post, Pseudo, .." aria-label="Search">
                        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Rechercher</button>
                    </form>
                </div>
            </nav>
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