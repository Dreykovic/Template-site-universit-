@extends('base')

@section('title', 'Programme')
@section('content')
    <div class="container-grid container-1">
        <h1 class="heading-1">Intégrer notre Université <br>D’excellence maintenant<br></h1>
        <div class="container-grid container-2"><a href="#" class="link-button-image btn btn-img-pg-strt1">
                <div class="image-for-button">
                    <picture><img alt="Placeholder Picture" src="./im/information--1-%402x.png"></picture>
                </div><span class="link-button-text text-for-button-link-1 text-btn">En savoir plus<br></span>
            </a><a href="#" class="link-button-image btn btn-img-pg-strt2"><span
                    class="link-button-text text-for-button-link-2 text-btn">Demande d'Admission</span>
                <div class="image-for-button">
                    <picture><img alt="Placeholder Picture" src="./im/next-3%402x.png"></picture>
                </div>
            </a></div>
    </div>
    <div class="container-grid container-18">
        <h1 class="heading-3">ce qu’il vous faut<br></h1>
    </div>
    <div class="container-grid container-19">
        <div class="container-grid container-20">
            <div class="responsive-picture picture-3">
                <picture><img alt="Placeholder Picture" src="./im/18953905-6055617-mesa-de-trabajo-1-1-2%401x.png">
                </picture>
            </div>
        </div>
    </div>
    <div class="container-grid container-14">
        <div class="container-grid container-16">
            <div class="html-element html-element-1"><span class="puces-num">1</span>
                <style>
                    span.puces-num {
                        font-weight: bold;
                        font-size: 1.7em;
                        background-color: #f2bc94;
                        color: #30110d;
                        border-radius: 50% 50%;
                        margin: 10px;
                        padding-left: 8px;
                        padding-right: 8px;
                    }
                </style>
            </div>
            <div class="container-grid container-17">
                <div class="html-element html-element-2"><span text-transform='capitalize'>CHOISIR UN PROGRAMME</span></div>
            </div><a href="{{ route('programme') }}" class="link-button-image btn btn-pg2-1 btn-list"><span
                    class="link-button-text text-for-button-link-2 text-btn">VOIR LES PROGAMMES<br></span></a>
        </div>
        <div class="container-grid container-16">
            <div class="html-element html-element-1"><span class="puces-num">2</span>
                <style>
                    span.puces-num {
                        font-weight: bold;
                        font-size: 1.7em;
                        background-color: #f2bc94;
                        color: #30110d;
                        border-radius: 50% 50%;
                        margin: 10px;
                        padding-left: 6px;
                        padding-right: 6px;

                    }
                </style>
            </div>
            <div class="container-grid container-17">
                <div class="html-element html-element-3"><span text-transform='capitalize'>VERIFIER LES EXIGENCES</span>
                </div>
            </div><a href="#exigence" class="link-button-image btn btn-pg2-1 btn-list"><span
                    class="link-button-text text-for-button-link-2 text-btn">VOIR LES EXIGENCES<br></span></a>
        </div>
        <div class="container-grid container-16">
            <div class="html-element html-element-1">
                <span class="puces-num">3</span>
                <style>
                    span.puces-num {
                        font-weight: bold;
                        font-size: 1.7em;
                        background-color: #f2bc94;
                        color: #30110d;
                        border-radius: 50% 50%;
                        margin: 10px;
                        padding-left: 6px;
                        padding-right: 6px;

                    }
                </style>
            </div>
            <div class="container-grid container-17">
                <div class="html-element html-element-4"><span text-transform='capitalize'>VERIFIER LES FRAIS DE
                        SCOLARITÉ</span>
                </div>
            </div><a href="{{ route('frais_2') }}" class="link-button-image btn btn-pg2-1 btn-list"><span
                    class="link-button-text text-for-button-link-2 text-btn">VOIR LES PROGAMMES<br></span></a>
        </div>
        <div class="container-grid container-16">
            <div class="html-element html-element-1"><span class="puces-num">4</span>
                <style>
                    span.puces-num {
                        font-weight: bold;
                        font-size: 1.7em;
                        background-color: #f2bc94;
                        color: #30110d;
                        border-radius: 50% 50%;
                        margin: 10px;
                        padding-left: 6px;
                        padding-right: 6px;

                    }
                </style>
            </div>
            <div class="container-grid container-17">
                <div class="html-element html-element-5"><span text-transform='capitalize'>VERIFIER LES BOURSES</span></div>
            </div><a href="{{ route('bourse_2') }}" class="link-button-image btn btn-pg2-1 btn-list"><span
                    class="link-button-text text-for-button-link-2 text-btn">VOIR LES BOURSES<br></span></a>
        </div>
        <div class="container-grid container-16">
            <div class="html-element html-element-1"><span class="puces-num">5</span>
                <style>
                    span.puces-num {
                        font-weight: bold;
                        font-size: 1.7em;
                        background-color: #f2bc94;
                        color: #30110d;
                        border-radius: 50% 50%;
                        margin: 10px;
                        padding-left: 6px;
                        padding-right: 6px;

                    }
                </style>
            </div>
            <div class="container-grid container-17">
                <div class="html-element html-element-6"><span text-transform='capitalize'>FAIRE LA DEMANDE
                        D'ADMISSION</span>
                </div>
            </div><a href="#" class="link-button-image btn btn-pg2-1 btn-list"><span
                    class="link-button-text text-for-button-link-2 text-btn">DEMANDE D’ADMISSION<br></span></a>
        </div>
    </div>
    <div class="container-grid sd-three-cols">
        <div class="container-grid container-12" id="container-1">
            <div class="responsive-picture picture-3">
                <picture><img alt="Placeholder Picture" src="./im/18953905-6055617-mesa-de-trabajo-1-1%401x.png"></picture>
            </div>
        </div>
        <div class="container-grid container-20">
            <div class="responsive-picture picture-3">
                <picture><img alt="Placeholder Picture" src="./im/18953905-6055617-mesa-de-trabajo-1-1-1%401x.png">
                </picture>
            </div>
        </div>
    </div>
    <div class="container-grid container-13">
        <div class="container-grid container-22">
            <h1 class="heading-2" id="exigence">Exigences minimales pour étudier à KBU<br></h1>
        </div>
        <div class="container-grid container-21 cantainer-img">
            <div class="container-grid container-5">
                <div class="responsive-picture picture-1">
                    <picture><img alt="Placeholder Picture" src="./im/learning---education-illustration-5-1%402x.png">
                    </picture>
                </div>
            </div>
            <div class="container-grid container-5">
                <div class="responsive-picture picture-1">
                    <picture><img alt="Placeholder Picture" src="./im/7446777-3661726-artboard-1-1%402x.png"></picture>
                </div>
            </div>
        </div>
        <div class="container-grid container-21">
            <div class="container-grid container-4">
                <h1 class="heading-2">1. Être titulaire d’un baccalauréat ou équivalent <br></h1>
                <p class="paragraph paragraph-2">Nous t'offrons la possibilité d'intégrer notre université virtuelle
                    d'excellence
                    de renommée internationale.Nous y avons pensé et avons façonné la meilleure opportunité pour toi. Avec
                    Knowbridge, étudies depuis chez toi et obtient une formation diplômante basée sur le système
                    nord-américain.
                    <br>
                </p><a href="#" class="link-button-image btn btn-pg-1"><span
                        class="link-button-text text-btn text-btn-pg-1">Continuer vers</span>
                    <div class="image-for-button">
                        <picture><img alt="Placeholder Picture" src="./im/next2-5-1%402x.png"></picture>
                    </div>
                </a>
            </div>
            <div class="container-grid container-4">
                <h1 class="heading-2">2. Passer l'examen et l'interview<br></h1>
                <p class="paragraph paragraph-2">Nous t'offrons la possibilité d'intégrer notreuniversité virtuelle
                    d'excellence
                    de renommée internationale.Nous y avons pensé et avons façonné la meilleure opportunité pour toi. Avec
                    Knowbridge, étudies depuis chez toi et obtient une formation diplômante basée sur le système
                    nord-américain.<br>
                </p><a href="#" class="link-button-image btn btn-pg-1"><span
                        class="link-button-text text-btn text-btn-pg-1">Continuer vers</span>
                    <div class="image-for-button">
                        <picture><img alt="Placeholder Picture" src="./im/next2-5-1%402x.png"></picture>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container-grid container-13">
        <div class="container-grid container-22" id="container-2">
            <h1 class="heading-2">Exigences minimales pour étudier à KBU<br><br></h1>
        </div>
        <div class="container-grid container-21 cantainer-img">
            <div class="container-grid container-5">
                <div class="responsive-picture picture-1">
                    <picture><img alt="Placeholder Picture" src="./im/18824957--converti--01-1%401x.png"></picture>
                </div>
            </div>
            <div class="container-grid container-5">
                <div class="responsive-picture picture-1">
                    <picture><img alt="Placeholder Picture" src="./im/internet-connection--converti--01-1%401x.png">
                    </picture>
                </div>
            </div>
        </div>
        <div class="container-grid container-21">
            <div class="container-grid container-4">
                <h1 class="heading-2">3. Avoir un bon ordinateur <br></h1>
                <p class="paragraph paragraph-2">Avoir un ordinateur d’au moins 8 Gb de mémoire RAM muni d’une caméra et
                    d’un
                    micro interne ou externe.<br></p><a href="#" class="link-button-image btn btn-pg-1"><span
                        class="link-button-text text-btn text-btn-pg-1">Continuer vers</span>
                    <div class="image-for-button">
                        <picture><img alt="Placeholder Picture" src="./im/next2-5-1%402x.png"></picture>
                    </div>
                </a>
            </div>
            <div class="container-grid container-4">
                <h1 class="heading-2">4&nbsp;. Avoir une bonne connexion internet<br></h1>
                <p class="paragraph paragraph-2">Les cours en ligne exigent une bonne connexion internet. Vous devez avoir
                    accès à
                    une bonne connexion internet d’au moins 10 Mb/s.<br></p><a href="#"
                    class="link-button-image btn btn-pg-1"><span class="link-button-text text-btn text-btn-pg-1">Continuer
                        vers</span>
                    <div class="image-for-button">
                        <picture><img alt="Placeholder Picture" src="./im/next2-5-1%402x.png"></picture>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container-grid">
        <div class="container-grid container-22">
            <h1 class="heading-2">Exigences d’admission<br></h1>
        </div>
        <div class="container-grid container-23">
            <h2 class="heading-4 left">Pour les études au certificat et Licence<br></h2>
            <div class="container-grid">
                <ul class="unorder-list puces-comp" data-custom-1="">
                    <li class="list-item list-item-1">Obtenir au moins 60 % ou 12/20 au BAC ou dans un diplôme
                        équivalent*<br></li>
                    <li class="list-item">Une (1) copie certifiée de l’acte ou du certificat de naissance<br></li>
                    <li class="list-item">Une (1) photo d’identité datant de moins de 6 mois<br></li>
                    <li class="list-item">Une (1) pièce d’identité valide avec photo<br></li>
                    <li class="list-item">Une (1) copie certifiée de l’attestation du BAC ou du diplôme équivalent<br></li>
                    <li class="list-item">Une (1) copie certifiée du relevé de notes des épreuves/ examen du BAC**<br></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-grid container-83" id="container-4">
        <div class="container-grid container-22">
            <h1 class="heading-2">Exigences d’admission<br></h1>
        </div>
        <div class="container-grid container-23" id="container-5">
            <h2 class="heading-4">Pour les études au niveau master<br></h2>
            <p class="paragraph paragraph-3">Vous devez soumettre tous les documents requis pour la<br>licence plus les
                documents ci-dessous:<br></p>
            <div class="container-grid">
                <ul class="unorder-list puces-comp" data-custom-1="">
                    <li class="list-item list-item-1">Obtenir au moins 60 % ou 12/20 au niveau licence*<br></li>
                    <li class="list-item">Une (1) copie certifiée des relevés de notes de licence<br></li>
                    <li class="list-item">Une (1) copie certifiée du diplôme de licence (le cas échéant)<br></li>
                    <li class="list-item">Un (1) curriculum vitae<br></li>
                    <li class="list-item">Deux (2) lettres de recommandation<br></li>
                    <li class="list-item">Lettre de motivation ou énoncé de recherche (1000 mots)<br></li>
                    <li class="list-item">Bonne connaissance de l’anglais.<br></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
