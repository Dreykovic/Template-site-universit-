@extends('base')
@section('title', 'Home')
@section('content')
    <div class="container-grid container-101">
        <div class="container-grid container-103">
            <div class="container-grid bg-content-size-container cool">
                <video class="content-size-video" autoplay="" loop="loop" muted="">
                    <source src="./im/1.mp4" type="video/mp4">
                </video>
                <h1 class="heading-10">Votre université d'&nbsp;<br>EXCELLENCE</h1><a href="#profil"
                    class="responsive-picture picture-link-1 cool">
                    <picture><img alt="" src="./im/next-3%402x.png"></picture>
                </a>
            </div>
        </div>
        <div class="container-grid container-102">
            <h3 class="heading-14" id="profil">Lequel des profils vous correspond au mieux ?</h3>
            <h1 class="heading-15">Choisissez votre profil</h1>
            <div class="container-grid container-75">
                <div class="container-grid container-99 ind1">
                    <div class="container-grid container-100">
                        <div class="responsive-picture picture-19">
                            <picture><img alt="Placeholder Picture" src="./im/rectangle-85%402x.png"></picture>
                        </div>
                    </div>
                    <h2 class="heading-16">étudiant régulier</h2>
                    <p class="paragraph paragraph-8">Si vous avez obtenu un BAC ou une&nbsp;LICENCE et vous désirez étudier
                        à temps plein. <br></p>
                </div>
                <div class="container-grid container-99 ind2">
                    <div class="container-grid container-100">
                        <div class="responsive-picture picture-19">
                            <picture><img alt="Placeholder Picture" src="./im/rectangle-87%402x.png"></picture>
                        </div>
                    </div>
                    <h2 class="heading-16">ProfessioNNel</h2>
                    <p class="paragraph paragraph-8">Si vous avez un emploi ou désirez<br> étudier à temps partiel. <br></p>
                </div>
                <div class="container-grid container-99 ind3">
                    <div class="container-grid container-100">
                        <div class="responsive-picture picture-19">
                            <picture><img alt="Placeholder Picture" src="./im/rectangle-89%402x.png"></picture>
                        </div>
                    </div>
                    <h2 class="heading-16">Exécutif</h2>
                    <p class="paragraph paragraph-8">Si vous êtes un dirigeant ou chef<br>de service et vous
                        désirez&nbsp;<br>étudier de façon indépendante.<br></p>
                </div>
            </div>
        </div>
    </div>
@endsection
