<?php

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
/*
Route::get('details', function () {
    return view('admin.detailsEnseignant');
});*/
Route::get('/', function () {
    return view('auth/login');
});


/*********** Enseignant***************************/

Route::get('enseignant','EnseignantController@index');
Route::get('enseignant/create','EnseignantController@create');
Route::post('enseignants','EnseignantController@store');
Route::get('enseignant/{id}/details','EnseignantController@details');
Route::get('enseignant/{id}/edit','EnseignantController@edit');
Route::post('enseignant/{id}','EnseignantController@update');
Route::delete('enseignant/{id}','EnseignantController@destroy');

/****************ResponsableCodage****************************************/

Route::get('ResponsableCodage','CodageController@index');
Route::get('codage','CodageController@codage');
Route::get('matiercoder/{id}','CodageController@paquet');
Route::post('paquet/{id}','CodageController@Cpaquet');
Route::get('paquet/{idP}/{idE}','CodageController@Ipaquet');
Route::get('ResponsableCodage/create','CodageController@create');
Route::post('ResponsablesCodage','CodageController@store');
Route::get('ResponsableCodage/{id}/details','CodageController@details');
Route::get('ResponsableCodage/{id}/edit','CodageController@edit');
Route::post('ResponsableCodage/{id}','CodageController@update');
Route::delete('ResponsableCodage/{id}','CodageController@destroy');

/***************Admin***************************/
Route::get('Admin/{id}/details','AdminController@details');
Route::get('Admin/{id}/edit','AdminController@edit');
Route::post('Admin/{id}','AdminController@update');
/*****************Absence**************************/


Route::get('MarquerAbsence/{id}','AbsenceController@index');
Route::get('seance','SeanceControleur@store');
Route::get('seance/{idS}/groupe/{idG}/module/{idM}/enseignant/{idE}/{type}','SeanceControleur@details');
Route::get('marrquer_absence/{nomG}/{idS}','AbsenceController@marquer');
Route::post('justification/{idS}','AbsenceController@justification');
/****************correction************************/

Route::get('CorrectionPaquet','paquetController@Mcorrection');
Route::get('CorrectionPaquet/{id}','paquetController@Pcorrection');
Route::get('affectation/{idE}','paquetController@affectation');
Route::get('CorrectionPaquet/{idP}/{idE}','paquetController@correction');
Route::post('affecter/{idE}','paquetController@store');
Route::get('note/{idP}/{idE}','paquetController@note');



/****************Matiere****************************************/
Route::get('matiere','MatiereController@index');
Route::get('matiere/create','MatiereController@create');
Route::POST('matieres','MatiereController@store');
Route::get('matiere/{id}/details','MatiereController@details');
Route::get('matiere/{id}/edit','MatiereController@edit');
Route::post('matiere/{id}','MatiereController@update');
Route::delete('matiere/{id}','MatiereController@destroy');
/***********************Examen****************************************/
Route::get('examen/{id}/create','ExamenController@create');
Route::get('examens/{id}','ExamenController@store');
Route::get('matiere/{id}/details','MatiereController@details');
Route::get('examen/{id}/details','ExamenController@details');
Route::get('examen/{id}','ExamenController@destroy');
Route::get('examen/{id}/edit','ExamenController@edit');
Route::post('examen/{id}','ExamenController@update');
/***********************Etudiant****************************************/
Route::get('etudiant/create','EtudiantController@create');
Route::post('etudiants','EtudiantController@store');
Route::get('etudiant/{id}/details','EtudiantController@details');

Route::get('etudiant/{id}/edit','EtudiantController@edit');
Route::post('etudiant/{id}','EtudiantController@update');
Route::delete('etudiant/{id}','EtudiantController@destroy');
/********************************************************************/
Route::get('promot/create','PromotController@create');
Route::get('promots','PromotController@store');
Route::get('promot/{id}/index','PromotController@index');
Route::get('promot','PromotController@promo');

Route::get('promot_groupes/{id}/index','GroupeController@index');
Route::get('groupe/create','GroupeController@create');
Route::get('{idM}/groupes/{idG}','GroupeController@store');
Route::delete('groupe/{id}','GroupeController@destroy');
Route::get('/ajax-subcat',function(){
	$cat_id=Input::get('cat_id');
	$subcategories=Groupe::where('groupes.promots_id','=',$cat_id)->pluck('nomGroup','idGroup');
	return json_encode($subcategories);
	//return Response::json($subcategories);
});
Route::auth();

Route::get('/profil','HomeController@profil');
//Route::get('/home', 'HomeController@index');
Route::get('/admin', 'AdminController@index');
