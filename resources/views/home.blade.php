<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
   
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="logo-container">
    <img src="/imgs/logo.png">
</div>
<div class="title"> 
    <span class="title"> COPE : Centre d'Orientation et de Planification de l'Éducation.</span>
</div>
<div class="container">
    <h2>Les concours d'entrée au Centre d'Orientation et de Planification l'Éducation <br> Filière conseillers en Planification et en orientation de l'éducation.</h2>
    
    <h3>Conditions de candidature :</h3>
    <p>Ces concours sont ouverts aux cadres de l'enseignement et aux enseignants des Académies régionales de l'éducation et de la formation, au moins au premier grade et ayant exercé pendant 15 ans dans cette fonction à la date du concours, et ayant au moins un diplôme de Licence ou d'études de base ou d'une Licence professionnelle ou l'équivalent.</p>

    <h3>Candidature :</h3>
    <p>La candidature et la validation de la demande de candidature électronique doivent obligatoirement être effectuées via l'inscription sur la plateforme électronique dédiée aux concours d'entrée au Centre d'Orientation et de Planification Éducative: <a href="https://cope.men.gov.ma">https://cope.men.gov.ma</a>  avant le 15 juillet 2022. La candidature à plus d'une académie n'est pas acceptée.</p>

    <h3>Dossier de candidature :</h3>
    <p> Le dossier de candidature électronique se compose des documents suivants :

        <ul><li>Un reçu de candidature électronique extrait de la plateforme dédiée aux concours ;</li>
            <li>Une copie du dernier rapport d'inspection ;</li>
            <li> Une copie certifiée conforme du diplôme de licence obtenu ;</li>
            <li> Une copie de la carte nationale d'identité.</li></ul></p>
    
    <h3>Dépôt de dossier de candidature :</h3>
    <p>Dans le cadre des mesures de précaution visant à garantir la sécurité sanitaire des candidates et candidats, conformément aux dispositions de la circulaire du Premier Ministre n° 16/2020 du 7 octobre 2020, qui prévoit l'adaptation des mesures et des procédures d'organisation des concours et des examens en raison de l'évolution de la situation épidémiologique due à la pandémie de Covid-19, le dépôt des dossiers de candidature se fera via la plateforme électronique dédiée à ces concours, en utilisant la technologie de téléchargement de documents numérisés constituant le dossier de candidature. Dans ce contexte, le candidat doit numériser les documents du dossier de candidature et les télécharger au format PDF sur la plateforme électronique dédiée à ces concours <a href="https://cope.men.gov.ma">https://cope.men.gov.ma</a> .</p>
</div>
<div class="b">
@guest
                            @if (Route::has('login'))
                               
                                    <a class="nav-link" href="{{ route('login') }}"><button>Se connecter</button></a>
                             
                            @endif

                            @if (Route::has('register'))
                               
                                    <a class="nav-link" href="{{ route('register') }}"><button> S'inscrire</button></a>
                                
                            @endif
                        @else
                        <a id="" class="" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                               
                                    <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <button>LogOut</button>
                                        
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    @if(Auth::user()->is_admin===1)
                                   <a href="/admin/dashboard"><button>Admin Dashboard</button></a> 
                                    @endif
                        @endguest
                    </ul>

</div>
</body>
</html>