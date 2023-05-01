@extends('base')
@section('title', 'Portail professeur')
@section('content')
    <div class="container-grid container-1 pg-7 pg-22 pg-17">
        <h1 class="heading-1 pg-7 pg-17">Portail Professeurs et<br>employés<br><br></h1>
    </div>
    <form class="form-container form-container-2">
        <h2 class="heading-11">Professeur et Personnel<br></h2>
        <div class="container-grid container-82">
            <div class="container-grid container-81 in1 ino"><label class="label label-2" for="chercher">Entrer le nom ou le
                    rôle</label><input value="" name="chercher" type="text" title="chercher" pattern="chercher"
                    required="required" class="input-1"></div>
            <div class="container-grid container-81 in1"><label class="label label-2" for="chercher">Entrer le nom ou le
                    rôle</label><input value="" name="chercher" type="text" title="chercher" pattern="chercher"
                    required="required" class="input-1"></div>
        </div>
        <div class="container-grid container-82">
            <div class="container-grid container-81 in1 ino"><label class="label label-2"
                    for="chercher">Département</label><input value="" name="chercher" type="text" title="chercher"
                    pattern="chercher" required="required" class="input-1"></div>
            <div class="container-grid container-81 in1" id="container-3"><label class="label label-2"
                    for="chercher">Trier</label><label class="label label-3">A-Z</label></div>
        </div>
    </form>
@endsection
