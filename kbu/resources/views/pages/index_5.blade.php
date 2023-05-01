@extends('base')

@section('title', 'Bourse')
@section('content')
    <div class="container-grid container-15">
        <div class="container-grid container-30">
            <h1 class="heading-17">Bourses pour les bachelier</h1>
        </div>
        <div class="container-grid container-31"><a class="link-button btn three-btn-1 threee"
                href="{{ route('departement') }}">Département</a><a class="link-button btn three-btn-2 threee"
                href="{{ route('carriere') }}">Carrière</a><a class="link-button btn three-btn-3 threee"
                href="{{ route('stage') }}">Stages</a></div>
        <div class="container-grid container-32">
            <h1 class="heading-1 other-title">Bourses pour les bacheliers<br></h1>
            <p class="paragraph paragraph-1 for-this-page">KBU offre plusieurs bourses d'entrée aux candidats les mieux
                classés
                pour les diplômes de niveau licence.<br></p>
        </div>
        <div class="container-grid container-33">
            <p class="paragraph paragraph-5">En plus des critères d’admissibilité généraux, le candidat doit :<br></p>
            <div class="container-grid container-52">
                <ol class="order-list">
                    <li class="list-item items-for-pg-5">Avoir obtenu son BAC (ou un diplôme équivalent) dans les trois (3)
                        années
                        précédant la demande d’admission.<br></li>
                    <li class="list-item items-for-pg-5">S’inscrire à temps plein chaque session durant tout son
                        parcours<br></li>
                </ol>
            </div>
        </div>
        <div class="container-grid container-34">
            <div class="container-grid container-23 pg-555555">
                <h2 class="heading-4 for-pg-55">BOURSE KNOWIDE CANADA<br></h2>
                <p class="paragraph paragraph-3 fpr-pg-555">Vous devez soumettre tous les documents requis pour
                    la<br>licence plus
                    les documents ci-dessous:<br></p>
                <h4 class="heading-9">CRITÈRES D'ADMISSIBILITÉS<br></h4>
                <div class="container-grid">
                    <ul class="unorder-list puces-comp" data-custom-1="">
                        <li class="list-item list-item-1">Avoir obtenu son BAC (ou un diplôme équivalent) dans les trois (3)
                            années
                            précédant la demande&nbsp; ’admission ;<br></li>
                        <li class="list-item list-item-2">Avoir 10-20 de moyenne au BAC ;<br></li>
                        <li class="list-item">Passer une entrevue de sélection Knowide Canada dans les locaux partenaires ou
                            par
                            vidéoconférence&nbsp;<br></li>
                        <li class="list-item">S’inscrire à temps plein chaque session durant tout son parcours ;<br></li>
                        <li class="list-item">Maintenir une moyenne minimale de 68% (GPA de 2.3) durant son parcours ;<br>
                        </li>
                        <li class="list-item">Nombre de bourses/places disponibles dans le monde 100 (être parmi les 100
                            premières
                            personnes à être qualifiées pour la bourse).<br></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-grid container-35">
            <div class="container-grid container-23 pg-555555 pour-grid-1 bah">
                <h2 class="heading-4 for-pg-55">Élite<br></h2>
                <div class="container-grid">
                    <ul class="unorder-list puces-comp" data-custom-1="">
                        <li class="list-item list-item-1">BAC en 2022<br></li>
                        <li class="list-item">16 de moyenne ou 80%<br></li>
                        <li class="list-item">Passer le concours de élection Knowbridge*<br></li>
                        <li class="list-item">Maintenir 76% (MGP de 3.0) durant son parcours à KBU<br></li>
                    </ul>
                </div><a href="#" class="link-button-image btn btn-pg2-1 for-pg-5-5"><span
                        class="link-button-text text-for-button-link-2 text-btn">100%</span></a>
            </div>
            <div class="container-grid container-23 pg-555555 pour-grid-2 bah">
                <h2 class="heading-4 for-pg-55">Excellente</h2>
                <div class="container-grid">
                    <ul class="unorder-list puces-comp" data-custom-1="">
                        <li class="list-item list-item-1">8 de moyenne ou 90% au BAC<br></li>
                        <li class="list-item">Maintenir 76% (MGP de 3.0) durant son parcours à KBU <br></li>
                    </ul>
                </div><a href="#" class="link-button-image btn btn-pg2-1 for-pg-5-5"><span
                        class="link-button-text text-for-button-link-2 text-btn">50%-60%</span></a>
            </div>
            <div class="container-grid container-23 pg-555555 pour-grid-3 bah">
                <h2 class="heading-4 for-pg-55">Très bien<br></h2>
                <div class="container-grid">
                    <ul class="unorder-list puces-comp" data-custom-1="">
                        <li class="list-item list-item-1">6 de moyenne ou 80%&nbsp;au BAC<br></li>
                        <li class="list-item">Faire partir des 100&nbsp;premières personnes&nbsp;qualifiées pour
                            cette&nbsp;bourse<br>
                        </li>
                        <li class="list-item">Maintenir 76% (MGP de 3.0) durant son parcours à KBU<br></li>
                    </ul>
                </div><a href="#" class="link-button-image btn btn-pg2-1 for-pg-5-5"><span
                        class="link-button-text text-for-button-link-2 text-btn">40%-50%</span></a>
            </div>
            <div class="container-grid container-23 pg-555555 pour-grid-4 bah">
                <h2 class="heading-4 for-pg-55">BIEN</h2>
                <div class="container-grid">
                    <ul class="unorder-list puces-comp" data-custom-1="">
                        <li class="list-item list-item-1">14 de moyenne ou 70%&nbsp; au BAC<br></li>
                        <li class="list-item">Faire partir des 75 premières personnes qualifiées pour cette bourse<br></li>
                        <li class="list-item">Maintenir 72% (MGP de 2.7) durant son parcours à KBU<br></li>
                    </ul>
                </div><a href="#" class="link-button-image btn btn-pg2-1 for-pg-5-5"><span
                        class="link-button-text text-for-button-link-2 text-btn">30%-40%</span></a>
            </div>
            <div class="container-grid container-23 pg-555555 pour-grid-5 bah">
                <h2 class="heading-4 for-pg-55">ASSEZ BIEN</h2>
                <div class="container-grid">
                    <ul class="unorder-list puces-comp" data-custom-1="">
                        <li class="list-item list-item-1">12 de moyenne ou 60% au BAC<br></li>
                        <li class="list-item">Faire partir des 50 premières personnes qualifiées pour cette bourse<br></li>
                        <li class="list-item">Maintenir 68% (MGP de 2.3) durant son parcours à KBU<br></li>
                    </ul>
                </div><a href="#" class="link-button-image btn btn-pg2-1 for-pg-5-5"><span
                        class="link-button-text text-for-button-link-2 text-btn">20%-30%</span></a>
            </div>
            <div class="container-grid container-23 pg-555555 pour-grid-6 bah">
                <h2 class="heading-4 for-pg-55">CONCOURS</h2>
                <div class="container-grid">
                    <ul class="unorder-list puces-comp" data-custom-1="">
                        <li class="list-item list-item-1">10 à 11.9 de moyenne ou&nbsp;50% à 59% au BAC<br></li>
                        <li class="list-item">Passer le concours&nbsp;d’entrée et faire partir des&nbsp;25 meilleurs**<br>
                        </li>
                        <li class="list-item">Maintenir 68% (MGP de 2.3) durant son parcours à KBU<br></li>
                    </ul>
                </div><a href="#" class="link-button-image btn btn-pg2-1 for-pg-5-5"><span
                        class="link-button-text text-for-button-link-2 text-btn">10%-20%</span></a>
            </div>
        </div>
    </div>
@endsection
