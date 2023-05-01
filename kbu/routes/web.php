<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index_0');
})->name('index');



Route::get('accueil', function () {
return view('pages.index_1');
})->name('accueil');


Route::get('programme', function () {
return view('pages.index_2');
})->name('programme');

Route::get('admission', function () {
return view('pages.index_3');
})->name('admission');

Route::get('frais', function () {
return view('pages.index_4');
})->name('frais');

Route::get('bourse', function () {
return view('pages.index_5');
})->name('bourse');

Route::get('departement', function () {
return view('pages.index_6');
})->name('departement');


Route::get('carriere', function () {
return view('pages.index_7');
})->name('carriere');

Route::get("technologie_de_l_informatique", function () {
return view('pages.index_8');
})->name('techinfo');

Route::get("resources_humaines", function () {
return view('pages.index_9');
})->name('reshum');

Route::get("marketing", function () {
return view('pages.index_10');
})->name('marketing');

Route::get("Entrepreneuriat", function () {
return view('pages.index_11');
})->name('entreprend');

Route::get("reseau_telecom", function () {
return view('pages.index_12');
})->name('restel');

Route::get("dev_app", function () {
return view('pages.index_13');
})->name('devapp');

Route::get("sc_gestion", function () {
return view('pages.index_14');
})->name('gestion');

Route::get("cybersecu", function () {
return view('pages.index_15');
})->name('cyber');

Route::get('professeur', function () {
return view('pages.index_17');
})->name('professeur');

Route::get('partenaire', function () {
return view('pages.index_18');
})->name('partenaire');

Route::get('blog', function () {
return view('pages.index_22');
})->name('blog');

Route::get('frais_2', function () {
return view('pages.index_23');
})->name('frais_2');

Route::get('bourse_2', function () {
return view('pages.index_25');
})->name('bourse_2');

Route::get('stage', function () {
return view('pages.index_26');
})->name('stage');

Route::get('form_abonnement', function () {
return view('pages.index_20');
})->name('fab');

Route::get('form_abonnement_suite', function () {
return view('pages.index_21');
})->name('fabs');
