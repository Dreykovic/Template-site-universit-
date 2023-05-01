@extends('base')

@section('title', 'Abonnement')
@section('content')
    <div class="container-grid container-93-1"></div>
    <div class="container-grid container-89-1">
        <div class="responsive-picture picture-12-1">
            <picture><img alt="Placeholder Picture" src="./im/login.svg"></picture>
        </div>
        <h3 class="heading-12"><span class="heading-text-2"><span class="heading-text-3">à</span><span>&nbsp;propos de
                    vous</span></span></h3>
    </div>
    <form class="form-container form-container-3">
        <div class="container-grid">
            <h3 class="heading-12-1"><span class="heading-text-2-1">Veuillez bien inserer vos coordonnées !<br></span></h3>
            <div class="container-grid container-91-1">
                <div class="container-grid container-90-1"><label class="label label-4-1">Pronom</label><select
                        class="select drop-down-2" name="___">
                        <option>_ _</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select></div>
                <div class="container-grid container-90-1"><label class="label label-4-1">Nom</label><input value=""
                        name="text-name" type="text" class="input-2"></div>
                <div class="container-grid container-90-1"><label class="label label-4-1">Prénom</label><input
                        value="" name="text-name" type="text" class="input-2-1"></div>
            </div>
            <div class="container-grid">
                <h4 class="heading-13">Avez-vous un ancien nom ? (c.-à-d. Nom de jeune fille)<br></h4>
                <p class="paragraph paragraph-7-1">Ces informations sont utilisées pour faire correspondre les dossiers des
                    étudiants avec votre<br>compte, y compris les relevés de notes.<br></p><label
                    class="radio radio-button-1-1 cfs-checked"><input type="radio" name="yes"
                        value="yes"><span>oui</span></label><label class="radio radio-button-1-1 cfs-checked"><input
                        type="radio" name="yes" value="non" checked="checked"><span>Non</span></label>
            </div>
            <div class="container-grid container-91-1">
                <div class="container-grid container-90-1"><label class="label label-4-1">E-mail</label><input
                        value="" name="text-name" type="text" class="input-2-1"></div>
                <div class="container-grid container-90-1"><label class="label label-4-1">Téléphone</label><input
                        value="" name="text-name" type="text" class="input-2-1"></div>
            </div>
            <h4 class="heading-13-1">Avez-vous un ancien nom ? (c.-à-d. Nom de jeune fille)<br></h4>
            <div class="container-grid container-91-1">
                <div class="container-grid container-90-1"><label class="label label-4-1">Type de diplôme</label><select
                        class="select drop-down-2-1">
                        <option></option>
                        <option>Baccalauréat</option>
                        <option>Certification</option>
                    </select></div>
                <div class="container-grid container-90-1"><label class="label label-4-1">Programme</label><select
                        class="select drop-down-2-1">
                        <option></option>
                        <option>Cybersécurité</option>
                        <option>Technologies de l'information</option>
                    </select></div>
            </div>
        </div>
        <div class="container-grid container-92-1"><a href="{{ route('fabs') }}"><button type="button"
                    class="btn">Suivant</button></a></div>
    </form>
@endsection
