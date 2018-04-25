@extends('layouts.layout')

@section('title', 'Accueil')

@section('content')
    <div id="cont_fiche_accueil"></div>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div id="carousel_home" class="carousel slide col-6" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel_home" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel_home" data-slide-to="1"></li>
                    <li data-target="#carousel_home" data-slide-to="2"></li>
                    <li data-target="#carousel_home" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{URL::asset('img/1.jpg')}}" height="400" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{URL::asset('img/2.jpg')}}" height="400" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{URL::asset('img/3.jpg')}}" height="400" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{URL::asset('img/4.jpg')}}" height="400" alt="Four slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel_home" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel_home" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="Chuck_fr"></div>
            </div>
        </div>

        <div id="cont_body_accueil">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Les articles les plus drôles</h5>
                            <p class="card-text">Il répond à la police nu en mangeant du cassoulet<a href="https://www.20minutes.fr/rennes/1522719-20150121-rennes-police-frappe-porte-nu-mange-cassoulet"> A voir ici</a></p>
                            <p class="card-text">L'asiatique voleur de slips et saucissons avait sept identités<a href="http://www.ledauphine.com/ardeche/2014/10/28/le-voleur-de-slips-et-saucissons-avait-sept-identites-differentes"> A voir ici</a></p>
                            <p class="card-text">Il barre la route des policiers avec une imprimante pour empêcher l'arrestation de son frère<a href="http://www.paris-normandie.fr/breves/normandie/evreux--il-barre-la-route-des-policiers-avec-une-imprimante-pour-empecher-l-arrestation-de-son-frere-XK3480426"> A voir ici</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Le meilleur des Darwin Awards</h5>
                            <p class="card-text"><ul>
                                <li>Un homme a ouvert une lettre piégée qu’il avait envoyée et qui lui avait été retournée par la poste parce qu’il manquait le timbre</li>
                                <li>A Philipsburg, un jeune homme s’est étouffé mortellement en avalant le soutien-gorge pailleté d’une strip-teaseuse, qu’il lui avait retiré avec les dents.</li>
                                <li>Un homme en Alaska a lancé un bâton de dynamite sur un lac gelé, pour on ne sait quelles raisons. Sauf que, accompagné de son chien de chasse très bien dressé, celui-ci lui a rapporté. Aïe.</li>
                            </ul></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Blagues Carambar</h5>
                            <p class="card-text">
                            <ul>
                                <li>Que font deux tranches de pain quand elles se rencontrent?
                                    <br>Elles font amie-amie (à mie-à mie)</li>
                                <li>Pourquoi les pages d'un livre sont-elles toujours chaudes?
                                    <br>Parce qu'elles ont une couverture...</li>
                                <li>Quel animal pas très beau vit en montagne?
                                    <br>Un chat laid (châlet)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text"><center>Le coin des pros de la blague! Steven Seagal vs Chuck Norris!!</center></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection