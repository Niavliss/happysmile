@extends('layouts.layout')

@section('title', 'Catégories')



@section('content')
    <div id="cont_fiche_categories"></div>
    <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <div id="entetecategories">
        <button class="btn btn-warning tout">Tout</button>
        <button class="btn btn-warning filter" target="txt">Blagues</button>
        <button class="btn btn-warning filter" target="pic">Images</button>
        <button class="btn btn-warning filter" target="vid">Vidéos</button>
    </div>
    <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <div class="container" id="cont_body_categories">
        <div class="row">
            <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
            <div class="col-3">
                <div class="card txt">
                    <div class="card-body">
                        <h5 class="card-title">Chuck Norris</h5>
                        <p class="card-text">Chuck Norris a déjà compté jusqu´à l´infini. Deux fois. </p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card txt">
                    <div class="card-body">
                        <h5 class="card-title">Chuck Norris</h5>
                        <p class="card-text">Chuck Norris donne fréquemment du sang à la Croix-Rouge. Mais jamais le sien.</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card txt">
                    <div class="card-body">
                        <h5 class="card-title">Chuck Norris</h5>
                        <p class="card-text">Chuck Norris comprend Jean-Claude Van Damme.</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card txt">
                    <div class="card-body">
                        <h5 class="card-title">Chuck Norris</h5>
                        <p class="card-text">Au restaurant, quand Chuck Norris commande un steak, le steak obéit.</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card pic">
                    <img class="card-img-top" src="{{URL::asset('img/bimage1.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Quand le commercial m'invite à venir jeter un oeil aux nouvelles specs.</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card pic">
                    <img class="card-img-top" src="{{URL::asset('img/bimage4.gif')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Quand un client vient au bureau le vendredi et demande la mise en prod de son site.</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card pic">
                    <img class="card-img-top" src="{{URL::asset('img/bimage2.gif')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Quand le chef me cherche pour une démo client.</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card pic">
                    <img class="card-img-top" src="{{URL::asset('img/bimage3.gif')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Vendredi, 17h.</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card vid">
                    <iframe src="https://www.youtube.com/embed/H96cetGuRzQ?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-3">
                <div class="card vid">
                    <iframe src="https://www.youtube.com/embed/AakBdDZxbqM?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-3">
                <div class="card vid">
                    <iframe src="https://www.youtube.com/embed/4aqdkIpXo90?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-3">
                <div class="card vid">
                    <iframe src="https://www.youtube.com/embed/pKU15SXVmeE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
            <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Précédent</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Suivant</a>
                </li>
            </ul>
        </nav>
        <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    </div>
@endsection