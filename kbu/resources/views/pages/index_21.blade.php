@extends('base')

@section('title', 'aAbonnement')
@section('content')
    <div class="container-grid container-93-2"></div>
    <div class="container-grid container-89-2">
        <div class="responsive-picture picture-12-2">
            <picture><img alt="Placeholder Picture" src="./im/login.svg"></picture>
        </div>
        <h3 class="heading-12-2">Information additionnelle</h3>
    </div>
    <form class="form-container form-container-3-1">
        <div class="container-grid">
            <h3 class="heading-12-2"><span class="heading-text-4"><span class="heading-text-6">​</span></span><span
                    class="heading-text-2-2">Où habites-tu?<br></span></h3>
            <div class="container-grid container-90-2"><label class="label label-4-2">Adresse</label><input value=""
                    name="text-name" type="text" class="pg-21 input-2-2"></div>
            <div class="container-grid container-90-2"><label class="label label-4-2">Adresse 2</label><input value=""
                    name="text-name" type="text" class="pg-21-1 input-2-2"></div>
            <div class="container-grid container-90-2"><label class="label label-4-2">Etat</label><select
                    class="select pg-21 drop-down-2-2">
                    <option>Sélectionnez l'état</option>
                    <option>Kentuky</option>
                    <option>Alaska</option>
                </select></div>
            <div class="container-grid container-90-2"><label class="label label-4-2">Pays</label><select
                    class="select pg-211 drop-down-2-2">
                    <option></option>
                    <option>Togo</option>
                    <option>Canada</option>
                </select></div>
            <h4 class="heading-13-2">Parler nous un peu de vous.<br></h4>
        </div>
        <div class="container-grid container-92-2"><button type="button" class="btn-1">Terminer</button><button
                type="button" class="btn-1">Orécédent</button></div>
    </form>
@endsection
