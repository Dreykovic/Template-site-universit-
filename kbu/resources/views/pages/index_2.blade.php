@extends('base')
@section('title', 'Admission')
@section('content')
    <div class="container-grid container-1">
        <h1 class="heading-1">Obtenez une Formation<br>Diplômante basée sur système <br>Nord-Américain<br></h1>
        <p class="paragraph paragraph-1">Devenez expert, en cybersécurité, au<br>métiers du digital et bien d’autres...<br>
        </p>
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
    <section class="container-grid container-6">
        <div class="container-grid container-9">
            <div class="container-grid container-8">
                <div class="responsive-picture picture-2">
                    <picture><img alt="Placeholder Picture" src="./im/rectangle-95%402x.png"></picture>
                </div>
            </div>
            <div class="container-grid container-7">
                <div class="container-grid container-4">
                    <h1 class="heading-2">Technologie de l'information<br><br></h1>
                    <p class="paragraph paragraph-2 pg-2">Dans ce monde de plus en plus numérique, les professionnels des TI
                        sont
                        essentiels au fonctionnement de toute entreprise dans tous les secteurs économiques.<br><br><br><br>
                    </p><a href="{{ route('techinfo') }}" class="link-button-image btn btn-pg2-1"><span
                            class="link-button-text text-for-button-link-2 text-btn">En savoir plus</span>
                        <div class="image-for-button">
                            <picture><img alt="Placeholder Picture" src="./im/d-2-2%402x.png"></picture>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="container-grid container-10">
            <div class="container-grid container-8">
                <div class="responsive-picture picture-2">
                    <picture><img alt="Placeholder Picture" src="./im/21902042-6527514-01-1%401x.png"></picture>
                </div>
            </div>
            <div class="container-grid container-7">
                <div class="container-grid container-4">
                    <h1 class="heading-2">CYBERSÉCURITÉ<br></h1>
                    <p class="paragraph paragraph-2 pg-2">Dans ce monde de plus en plus numérique, les professionnels des TI
                        sont
                        essentiels au fonctionnement de toute entreprise dans tous les secteurs économiques.<br></p><a
                        href="{{ route('cyber') }}" class="link-button-image btn btn-pg2-1"><span
                            class="link-button-text text-for-button-link-2 text-btn">En
                            savoir plus</span></a>
                </div>
            </div>
        </div>
        <div class="container-grid container-11">
            <div class="container-grid container-8">
                <div class="responsive-picture picture-2">
                    <picture><img alt="Placeholder Picture" src="./im/rectangle-99%402x.png"></picture>
                </div>
            </div>
            <div class="container-grid container-7">
                <div class="container-grid container-4">
                    <h1 class="heading-2">Réseaux et télécommunications<br></h1>
                    <p class="paragraph paragraph-2 pg-2">Obtenez des connaissances et une expérience professionnelle dans
                        les
                        déploiements de réseaux d'entreprise et des réseaux de fournisseurs d'accès internet qui permettra
                        de compétir
                        à l'échelle Mondiale.<br></p><a href="{{ route('restel') }}"
                        class="link-button-image btn btn-pg2-1"><span
                            class="link-button-text text-for-button-link-2 text-btn">En savoir plus</span></a>
                </div>
            </div>
        </div>
        <div class="container-grid container-11">
            <div class="container-grid container-8">
                <div class="responsive-picture picture-2">
                    <picture><img alt="Placeholder Picture" src="./im/rectangle-102%402x.png"></picture>
                </div>
            </div>
            <div class="container-grid container-7">
                <div class="container-grid container-4">
                    <h1 class="heading-2">Développement des applications Web<br></h1>
                    <p class="paragraph paragraph-2 pg-2">Développez une application Web depuis sa conception, son
                        développement
                        jusqu’au lancement.Apprenez à créer des applications web multiplateformes fonctionnelles à l’aide de
                        technologies Web comme HTML5, CSS et JavaScript.<br></p><a href="{{ route('devapp') }}"
                        class="link-button-image btn btn-pg2-1"><span
                            class="link-button-text text-for-button-link-2 text-btn">En
                            savoir plus</span></a>
                </div>
            </div>
        </div>
        <div class="container-grid container-9">
            <div class="container-grid container-8">
                <div class="responsive-picture picture-2">
                    <picture><img alt="Placeholder Picture" src="./im/rectangle-99-1%401x.png"></picture>
                </div>
            </div>
            <div class="container-grid container-7">
                <div class="container-grid container-4">
                    <h1 class="heading-2">Science de Gestion<br><br></h1>
                    <p class="paragraph paragraph-2 pg-2">Dans ce monde de plus en plus numérique, les professionnels des TI
                        sont
                        essentiels au fonctionnement de toute entreprise dans tous les secteurs économiques.<br></p><a
                        href="{{ route('gestion') }}" class="link-button-image btn btn-pg2-1"><span
                            class="link-button-text text-for-button-link-2 text-btn">En
                            savoir plus</span></a>
                </div>
            </div>
        </div>
        <div class="container-grid container-10">
            <div class="container-grid container-7">
                <div class="container-grid container-4">
                    <h1 class="heading-2">Entrepreneuriat<br></h1>
                    <p class="paragraph paragraph-2 pg-2">La formation en entrepreneuriat permet aux diplômés d'acquérir une
                        variété
                        de compétences nécessaires pour lancer et gérer une entreprise. Découvrez votre créativité et talent
                        avec ce
                        diplôme.<br></p>
                    <div class="container-grid container-8">
                        <div class="responsive-picture picture-2">
                            <picture><img alt="Placeholder Picture" src="./im/rectangle-97%402x.png"></picture>
                        </div>
                    </div><a href="{{ route('entreprend') }}" class="link-button-image btn btn-pg2-1"><span
                            class="link-button-text text-for-button-link-2 text-btn">En savoir plus</span></a>
                </div>
            </div>
        </div>
        <div class="container-grid container-11">
            <div class="container-grid container-8">
                <div class="responsive-picture picture-2">
                    <picture><img alt="Placeholder Picture" src="./im/rectangle-100%401x.png"></picture>
                </div>
            </div>
            <div class="container-grid container-7">
                <div class="container-grid container-4">
                    <h1 class="heading-2"><span class="heading-text-1">Marketing</span><br></h1>
                    <p class="paragraph paragraph-2 pg-2">Alors que la concurrence mondiale s'intensifie, les organisations
                        s'appuient de plus en plus sur des professionnels qualifiés en marketing pour identifier et
                        développer de
                        nouveaux produits et marchés rentables.<br></p><a href="{{ route('marketing') }}"
                        class="link-button-image btn btn-pg2-1"><span
                            class="link-button-text text-for-button-link-2 text-btn">En savoir plus</span></a>
                </div>
            </div>
        </div>
        <div class="container-grid container-10">
            <div class="container-grid container-7">
                <div class="container-grid container-4">
                    <h1 class="heading-2">Ressources humaines<br></h1>
                    <div class="container-grid container-8">
                        <div class="responsive-picture picture-2">
                            <picture><img alt="Placeholder Picture" src="./im/rectangle-100-1%401x.png"></picture>
                        </div>
                    </div>
                    <p class="paragraph paragraph-2 pg-2">Alors que la concurrence mondiale s'intensifie, les organisations
                        s'appuient de plus en plus sur des professionnels qualifiés en marketing pour identifier et
                        développer de
                        nouveaux produits et marchés rentables.<br></p><a href="{{ route('reshum') }}"
                        class="link-button-image btn btn-pg2-1"><span
                            class="link-button-text text-for-button-link-2 text-btn">En savoir plus</span></a>
                </div>
            </div>
        </div>
    </section>
@endsection
