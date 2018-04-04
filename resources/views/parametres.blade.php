@extends('layouts.layout')

@section('title', 'Paramètres')

@section('content')
<div class="container">
  <div class="row ">
    <div class="col pt-2">
      <form method="post" action="page.php" enctype="" id="formu">
        <div id="accordion" role="tablist" aria-multiselectable="true">
          <div class="card">
            <div class="card-header" role="tab" id="headingOne">
              <h5 class="mb-0">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Photo du profil</a>
              </h5>
            </div>
            <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
              <div class="custom-file card-block mt-1 mb-1 ">
                <input type="file" name="photo" class="custom-file-input" id="photo">
                <label class="custom-file-label" for="photo">Votre image</label>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
              <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Mot de passe
                </a>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="input-group mt-1 mb-1">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="Mdp">Mot de Passe</label>
                </div>
                <input type="password" class="form-control" id="Mdp" placeholder="*********">
              </div>
              <div class="input-group mt-1 mb-1">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="Mdp2">Confirmation</label>
                </div>
                <input type="password" class="form-control" id="Mdp2" placeholder="*********">
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingThree">
              <h5 class="mb-0">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Adresse Mail
                </a>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="input-group mt-1 mb-1">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="mail">Mail</label>
                </div>
                <input type="email" class="form-control" id="mail" placeholder="name@example.com">
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingFour">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Politique de confidentialité
              </a>
            </h5>
          </div>
          <div id="collapseFour" class="collapse text-justify" role="tabpanel" aria-labelledby="headingFour">
            <span>
              <strong>1.Collecte de l’information</strong>
              <p class="p-1">Nous recueillons des informations lorsque vous vous inscrivez sur notre site, lorsque vous vous connectez à votre compte, participez à un concours, et ou lorsque vous vous déconnectez. Les informations recueillies incluent votre nom, votre adresse e-mail.</p>
              <p class="p-1">En outre, nous recevons et enregistrons automatiquement des informations à partir de votre ordinateur et navigateur, y compris votre adresse IP, vos logiciels et votre matériel, et la page que vous demandez.</p>
            </span>

            <span >
              <strong>2. Utilisation des informations</strong>
              <p class="p-1">Toute les informations que nous recueillons auprès de vous peuvent être utilisées pour :</p>
              <ul>
                <li>Personnaliser votre expérience et répondre à vos besoins individuels</li>
                <li>Fournir un contenu publicitaire personnalisé</li>
                <li>Améliorer notre site Web</li>
                <li>Vous contacter par e-mail</li>
                <li>Administrer un concours, une promotion, ou un enquête</li>
              </ul>
            </span>
            <span >
              <strong>3. Divulgation à des tiers</strong>
              <p class="p-1">Nous ne vendons, n’échangeons et ne transférons pas vos informations personnelles identifiables à des tiers. Cela ne comprend pas les tierce parties de confiance qui nous aident à exploiter notre site Web ou à mener nos affaires, tant que ces parties conviennent de garder ces informations confidentielles.</p>
              <p class="p-1">Nous pensons qu’il est nécessaire de partager des informations afin d’enquêter, de prévenir ou de prendre des mesures concernant des activités illégales, fraudes présumées, situations impliquant des menaces potentielles à la sécurité physique de toute personne, violations de nos conditions d’utilisation, ou quand la loi nous y contraint.</p>
              <p class="p-1">Les informations non-privées, cependant, peuvent être fournies à d’autres parties pour le marketing, la publicité, ou d’autres utilisations.</p>
            </span>
            <span >
              <strong>4. Protection des informations</strong>
              <p class="p-1">Nous mettons en œuvre une variété de mesures de sécurité pour préserver la sécurité de vos informations personnelles. Nous utilisons un cryptage à la pointe de la technologie pour protéger les informations sensibles transmises en ligne. Nous protégeons également vos informations hors ligne. Les ordinateurs et serveurs utilisés pour stocker des informations personnelles identifiables sont conservés dans un environnement sécurisé.</p>
            </span>
            <span >
              <strong>5. Se désabonner</strong>
              <p class="p-1">Nous utilisons l’adresse e-mail que vous fournissez pour vous envoyer des informations et des nouvelles de l’entreprise de façon occasionnelle. Si à n’importe quel moment vous souhaitez vous désinscrire et ne plus recevoir d’e-mails, des instructions de désabonnement détaillées sont incluses en bas de chaque e-mail.</p>
            </span>
            <span >
              <strong>6. Consentement</strong>
              <p class="p-1">En utilisant notre site, vous consentez à notre politique de confidentialité.</p>
            </span>
          </div>
        </div>
        <div class="row m-1">
          <button type="submit" class="btn btn-lg btn-warning btn-block" id="envoi">Enregistrer les modifications</button>
        </div>
      </form>
    </div>
    <span class="border-right"></span>
    <div class="col pt-2">
      <div id="accordion" role="tablist" aria-multiselectable="true">
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2One" aria-expanded="false" aria-controls="collapse2One">Aide</a>
            </h5>
          </div>
          <div id="collapse2One" class="collapse text-justify" role="tabpanel" aria-labelledby="headingOne">
            <p class="p-1">Ici seront données les informations essentielles à la bonne compréhension, et utilisation, de notre fantastique réseau social !!!!</p>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2Two" aria-expanded="false" aria-controls="collapse2Two">CGU</a>
            </h5>
          </div>
          <div id="collapse2Two" class="collapse text-justify" role="tabpanel" aria-labelledby="headingTwo">
            <span>
              <strong>ARTICLE 1 : Objet</strong>
              <p class="p-1">Les présentes « conditions générales d'utilisation » ont pour objet l'encadrement juridique des modalités de mise à disposition des services du site <b>Happy Smile</b> et leur utilisation par « l'Utilisateur ».</p>
              <p class="p-1">Les conditions générales d'utilisation doivent être acceptées par tout Utilisateur souhaitant accéder au site. Elles constituent le contrat entre le site et l'Utilisateur. L’accès au site par l’Utilisateur signifie son acceptation des présentes conditions générales d’utilisation.</p>
            </span>
            <span >
              <strong>ARTICLE 2 : Mentions légales</strong>
              <p class="p-1">L'édition du site <b>Happy Smile</b> est assurée par la SARL <b>Space Lemons</b> au capital de <b>0</b> € dont le siège social est situé au Campus.</p>
            </span>
            <span >
              <strong>ARTICLE 3 : Définitions</strong>
              <p class="p-1">La présente clause a pour objet de définir les différents termes essentiels du contrat :</p>
              <ul>
                <li>Utilisateur : ce terme désigne toute personne qui utilise le site ou l'un des services proposés par le site.</li>
                <li>Contenu utilisateur : ce sont les données transmises par l'Utilisateur au sein du site.</li>
                <li>Membre : l'Utilisateur devient membre lorsqu'il est identifié sur le site.</li>
                <li>Identifiant et mot de passe : c'est l'ensemble des informations nécessaires à l'identification d'un Utilisateur sur le site. L'identifiant et le mot de passe permettent à l'Utilisateur d'accéder à des services réservés aux membres du site. Le mot de passe est confidentiel.</li>
              </ul>
            </span>
            <span >
              <strong>ARTICLE 4 : accès aux services</strong>
              <p class="p-1">Le site permet à l'Utilisateur un accès gratuit aux services suivants :</p>
              <ul>
                <li></li>
                <li></li>
                <li></li>
              </ul>
              <p class="p-1">Le site est accessible gratuitement en tout lieu à tout Utilisateur ayant un accès à Internet. Tous les frais supportés par l'Utilisateur pour accéder au service (matériel informatique, logiciels, connexion Internet, etc.) sont à sa charge.</p>
              <p class="p-1">L’Utilisateur non membre n'a pas accès aux services réservés aux membres. Pour cela, il doit s'identifier à l'aide de son identifiant et de son mot de passe.</p>
            </span>
            <span >
              <strong>ARTICLE 5 : Propriété intellectuelle</strong>
              <p class="p-1">Les marques, logos, signes et tout autre contenu du site font l'objet d'une protection par le Code de la propriété intellectuelle et plus particulièrement par le droit d'auteur.</p>
              <p class="p-1">L'Utilisateur sollicite l'autorisation préalable du site pour toute reproduction, publication, copie des différents contenus.</p>
              <p class="p-1">L'Utilisateur s'engage à une utilisation des contenus du site dans un cadre strictement privé. Une utilisation des contenus à des fins commerciales est strictement interdite.</p>
              <p class="p-1">Tout contenu mis en ligne par l'Utilisateur est de sa seule responsabilité. L'Utilisateur s'engage à ne pas mettre en ligne de contenus pouvant porter atteinte aux intérêts de tierces personnes. Tout recours en justice engagé par un tiers lésé contre le site sera pris en charge par l'Utilisateur.</p>
              <p class="p-1">Le contenu de l'Utilisateur peut être à tout moment et pour n'importe quelle raison supprimé ou modifié par le site. L'Utilisateur ne reçoit aucune justification et notification préalablement à la suppression ou à la modification du contenu Utilisateur.</p>
            </span>
            <span >
              <strong>ARTICLE 6 : Données personnelles</strong>
              <p class="p-1">Les informations demandées à l’inscription au site sont nécessaires et obligatoires pour la création du compte de l'Utilisateur. En particulier, l'adresse électronique pourra être utilisée par le site pour l'administration, la gestion et l'animation du service.</p>
              <p class="p-1">Le site assure à l'Utilisateur une collecte et un traitement d'informations personnelles dans le respect de la vie privée conformément à la loi n°78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers et aux libertés. Le site est déclaré à la CNIL sous le numéro [numéro].</p>
              <p class="p-1">En vertu des articles 39 et 40 de la loi en date du 6 janvier 1978, l'Utilisateur dispose d'un droit d'accès, de rectification, de suppression et d'opposition de ses données personnelles.</p>
            </span>
            <span>
              <strong>ARTICLE 7 : Responsabilité et force majeure</strong>
              <p class="p-1">Les sources des informations diffusées sur le site sont réputées fiables. Toutefois, le site se réserve la faculté d'une non-garantie de la fiabilité des sources. Les informations données sur le site le sont à titre purement informatif. Ainsi, l'Utilisateur assume seul l'entière responsabilité de l'utilisation des informations et contenus du présent site.</p>
              <p class="p-1">L'Utilisateur s'assure de garder son mot de passe secret. Toute divulgation du mot de passe, quelle que soit sa forme, est interdite.</p>
              <p class="p-1">L'Utilisateur assume les risques liés à l'utilisation de son identifiant et mot de passe. Le site décline toute responsabilité.</p>
              <p class="p-1">La responsabilité du site ne peut être engagée en cas de force majeure ou du fait imprévisible et insurmontable d'un tiers.</p>
            </span>
            <span>
              <strong>ARTICLE 8 : Évolution du contrat</strong>
              <p class="p-1">Le site se réserve à tout moment le droit de modifier les clauses stipulées dans le présent contrat.</p>
            </span>
            <span>
              <strong>ARTICLE 9 : Publication par l’Utilisateur</strong>
              <p class="p-1">Le site permet aux membres de publier des commentaires ou des œuvres personnelles.</p>
              <p class="p-1">Dans ses publications, le membre s’engage à respecter les règles de la Netiquette et les règles de droit en vigueur.</p>
              <p class="p-1">Le site exerce une modération [a priori / a posteriori] sur les publications et se réserve le droit de refuser leur mise en ligne, sans avoir à s’en justifier auprès du membre.</p>
            </span>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingThree">
            <h5 class="mb-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2Three" aria-expanded="false" aria-controls="collapse2Three">A propos</a>
            </h5>
          </div>
          <div id="collapse2Three" class="collapse text-justify" role="tabpanel" aria-labelledby="headingThree">
            <span>
              <p class="p-1">Les Logos du site Happy Smile et de l'entreprise Space Lemons sont la proprités de Space Lemons.</p>
            </span>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingFour">
            <h5 class="mb-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2Four" aria-expanded="false" aria-controls="collapse2Four">Signaler un problème</a>
            </h5>
          </div>
          <div id="collapse2Four" class="collapse text-justify" role="tabpanel" aria-labelledby="headingFour">
            <form method="post" action="page2.php" enctype="">
              <div class="input-group mt-1 mb-1">
                <div class="input-group-prepend">
                  <button class="btn-outline-warning input-group-text" type="submit" for="Signal">Signaler</button>
                </div>
                <textarea class="form-control" id="Signal"> </textarea>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
@endsection

