@extends('base')

@section('title', 'Frais')
@section('content')
    <div class="container-grid container-24 cont-4">
        <h1 class="heading-4">Frais de Scolarité<br></h1>
        <div class="container-grid container-20">
            <div class="responsive-picture picture-4">
                <picture><img alt="Placeholder Picture" src="./im/frais.png"></picture>
            </div>
        </div>
    </div>
    <h1 class="heading-1">Estimation des frais descolarité<br></h1>
    <div class="container-grid container-29 table-responsive">
        <table class="  estimation-table table" cellspacing="0">
            <tr class="ln-t1">
                <th class="data l1 c1">
                    <h3 class="tit">Diplôme</h3>
                </th>
                <th class="data l1 c2">
                    <h3 class="tit">Frais d'admission</h3>
                </th>
                <th class="data l1 c3">
                    <h3 class="tit">Frais administratifs</h3>
                </th>
            </tr>
            <tr class="ln-t1">
                <td class="data l2 c1">
                    <span class="text-element text-1">Licence <br></span>
                </td>
                <td class="data l2 c2">
                    <span class="text-element text-1">30 000 FR CFA<br></span>
                </td>
                <td class="data l2 c3">
                    <span class="text-element text-1">60 000 FR CFA<br></span>
                </td>
            </tr>
            <tr class="ln-t1">
                <td class="data l3 c1">
                    <span class="text-element text-1">Master<br></span>
                </td>
                <td class="data l3 c2">
                    <span class="text-element text-1">60 000 FR CFA<br></span>
                </td>
                <td class="data l3 c3">
                    <span class="text-element text-1">100 000 FR CFA<br></span>
                </td>
            </tr>
        </table>
        <div class="container-grid container-26">
            <div class="container-grid container-51">
                <h3 class="heading-8">NB:</h3>
                <p class="paragraph paragraph-4">Les bourses ne prennent pas en charge ces différents frais<br></p>
            </div>
            <div class="container-grid">
                <ul class="unorder-list">
                    <li class="list-item mes-items">Les frais d'admission se paie une seule fois pour l'analyse des
                        dossiers<br>
                    </li>
                    <li class="list-item mes-items">Les frais administratif se paie une fois par année.<br></li>
                </ul>
            </div>
        </div>

        <table class=" tab-fr-1 table" cellspacing="0">
            <tr class="ligne-t-f-1">
                <th class="dt-tb-frais-1 l1 data rc" colspan="3">
                    <h2 class="tit-f">1. Frais de scolarité annuel pour Étudiant régulier<br></h2>
                </th>
            </tr>
            <tr>
                <td class="dt-tb-frais-1 l2 data c1">
                    <h3 class="tit">Diplôme</h3>
                </td>
                <td class="dt-tb-frais-1 l2 data c2">
                    <h3 class="tit">Technologie de l'information Cybersécurité Réseau et télécommunication Développement
                        d'application web<br></h3>
                </td>
                <td class="dt-tb-frais-1 l2 data c3">
                    <h3 class="tit">Science de gestion Entrepreneuriat Marketing Ressources humaines<br></h3>
                </td>
            </tr>
            <tr>
                <td class="dt-tb-frais-1 l3 data c1">
                    <span class="text-element text-1">Certificat <br></span>
                </td>
                <td class="dt-tb-frais-1 l3 data c2">
                    <span class="text-element text-1">1.800.000 FR CFA<br></span>
                </td>
                <td class="dt-tb-frais-1 l3 data c3">
                    <span class="text-element text-1">1.500.000 FR CFA<br></span>
                </td>
            </tr>

            <tr>
                <td class="dt-tb-frais-1 l4 data c1">
                    <span class="text-element text-1">Licence <br></span>
                </td>
                <td class="dt-tb-frais-1 l4 data c2">
                    <span class="text-element text-1">1.800.000 FR CFA<br></span>
                </td>
                <td class="dt-tb-frais-1 l4 data c3">
                    <span class="text-element text-1">1.500.000 FR CFA<br></span>
                </td>
            </tr>
            <tr>
                <td class="dt-tb-frais-1 l5 data c1">
                    <span class="text-element text-1">Master<br></span>
                </td>
                <td class="dt-tb-frais-1 l5 data c2">
                    <span class="text-element text-1">2.400.000 FR CFA<br></span>
                </td>
                <td class="dt-tb-frais-1 l5 data c3">
                    <span class="text-element text-1">2.100.000 FR CFA<br></span>
                </td>
            </tr>


        </table>
        <div class="container-grid container-27 ">
            <h2 class="heading-5">Frais de scolarité pour les programmes du département des technologie de l’information<br>
            </h2>

            <table class=" tab-arg">
                <tr>
                    <td class="rien ca1"></td>
                    <td class="tiit ca2">Frais d'admission</td>
                    <td class="tiit ca3">Frais administratifs</td>
                    <td class="tiit ca4">1ere tranche</td>
                    <td class="tiit ca5">2e tranche</td>
                    <td class="tiit ca6">3e tranche</td>
                    <td class="tiit ca7">4e tranche</td>
                    <td class="tiit ca8">5e tranche</td>
                    <td class="tiit ca9">6e tranche</td>
                    <td class="centrer ca10">Total</td>

                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>1er septembre</td>
                    <td>1er septembre</td>
                    <td>1er octobre</td>
                    <td>1er novembre</td>
                    <td>1er janvier</td>
                    <td>1er février</td>
                    <td>1er mars</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Licence 1</td>
                    <td>30 000 F</td>
                    <td>50 000 F</td>
                    <td>400 000 F</td>
                    <td>300 000 F</td>
                    <td>300 000 F</td>
                    <td>300 000 F</td>
                    <td>300 000 F</td>
                    <td>200 000 F</td>
                    <td>1 880 000 F</td>
                </tr>
                <tr>
                    <td>Licence 2</td>
                    <td class="ce0">0 F</td>
                    <td>50 000 F</td>
                    <td>400 000 F</td>
                    <td>300 000 F</td>
                    <td>300 000 F</td>
                    <td>300 000 F</td>
                    <td>300 000 F</td>
                    <td>200 000 F</td>
                    <td>1 850 000 F</td>
                </tr>
                <tr>
                    <td>Licence 3</td>
                    <td class="ce0">0 F</td>
                    <td>50 000 F</td>
                    <td>400 000 F</td>
                    <td>300 000 F</td>
                    <td>300 000 F</td>
                    <td>300 000 F</td>
                    <td>300 000 F</td>
                    <td>200 000 F</td>
                    <td>1 850 000 F</td>
                </tr>
                <tr>
                    <td>Master 1</td>
                    <td>60 000 F</td>
                    <td>100 000 F</td>
                    <td>350 000 F</td>
                    <td>350 000 F</td>
                    <td>350 000 F</td>
                    <td>350 000 F</td>
                    <td>350 000 F</td>
                    <td>350 000 F</td>
                    <td>2 560 000 F</td>
                </tr>
                <tr>
                    <td>Master 2</td>
                    <td class="ce0">0 F</td>
                    <td>100 000 F</td>
                    <td>350 000 F</td>
                    <td>350 000 F</td>
                    <td>350 000 F</td>
                    <td>350 000 F</td>
                    <td>350 000 F</td>
                    <td>350 000 F</td>
                    <td>2 500 000 F</td>
                </tr>

            </table>
        </div>
        <div class="container-grid container-28 ">
            <h2 class="heading-5">Frais de scolarité pour les programmes du département des sciences de gestion<br></h2>
            <table class=" tab-arg ">
                <tr>
                    <td class="rien ca1"></td>
                    <td class="tiit ca2">Frais d'admission</td>
                    <td class="tiit ca3">Frais administratifs</td>
                    <td class="tiit ca4">1ere tranche</td>
                    <td class="tiit ca5">2e tranche</td>
                    <td class="tiit ca6">3e tranche</td>
                    <td class="tiit ca7">4e tranche</td>
                    <td class="tiit ca8">5e tranche</td>
                    <td class="tiit ca9">6e tranche</td>
                    <td class="centrer ca10">Total</td>

                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>1er septembre</td>
                    <td>1er septembre</td>
                    <td>1er octobre</td>
                    <td>1er novembre</td>
                    <td>1er janvier</td>
                    <td>1er février</td>
                    <td>1er mars</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Licence 1</td>
                    <td>30 000 F</td>
                    <td>50 000 F</td>
                    <td>400 000 F</td>
                    <td>300 000 F</td>
                    <td>300 000 F</td>
                    <td>300 000 F</td>
                    <td>300 000 F</td>
                    <td>200 000 F</td>
                    <td>1 880 000 F</td>
                </tr>
                <tr>
                    <td>Licence 2</td>
                    <td class="ce0">0 F</td>
                    <td>50 000 F</td>
                    <td>400 000 F</td>
                    <td>300 000 F</td>
                    <td>300 000 F</td>
                    <td>300 000 F</td>
                    <td>300 000 F</td>
                    <td>200 000 F</td>
                    <td>1 850 000 F</td>
                </tr>
                <tr>
                    <td>Licence 3</td>
                    <td class="ce0">0 F</td>
                    <td>50 000 F</td>
                    <td>400 000 F</td>
                    <td>300 000 F</td>
                    <td>300 000 F</td>
                    <td>300 000 F</td>
                    <td>300 000 F</td>
                    <td>200 000 F</td>
                    <td>1 850 000 F</td>
                </tr>
                <tr>
                    <td>Master 1</td>
                    <td>60 000 F</td>
                    <td>100 000 F</td>
                    <td>350 000 F</td>
                    <td>350 000 F</td>
                    <td>350 000 F</td>
                    <td>350 000 F</td>
                    <td>350 000 F</td>
                    <td>350 000 F</td>
                    <td>2 560 000 F</td>
                </tr>
                <tr>
                    <td>Master 2</td>
                    <td class="ce0">0 F</td>
                    <td>100 000 F</td>
                    <td>350 000 F</td>
                    <td>350 000 F</td>
                    <td>350 000 F</td>
                    <td>350 000 F</td>
                    <td>350 000 F</td>
                    <td>350 000 F</td>
                    <td>2 500 000 F</td>
                </tr>

            </table>
        </div>
    </div>
@endsection
