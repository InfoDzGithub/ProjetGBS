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


Route::get('enseignant','EnseignantController@index');
Route::get('enseignant/create','EnseignantController@create');
Route::post('enseignants','EnseignantController@store');
Route::get('enseignant/{id}/details','EnseignantController@details');
Route::get('enseignant/{id}/edit','EnseignantController@edit');
Route::post('enseignant/{id}','EnseignantController@update');
Route::delete('enseignant/{id}','EnseignantController@destroy');
/****************Matiere****************************************/
Route::get('matiere','MatiereController@index');
Route::get('matiere/create','MatiereController@create');
Route::get('matieres','MatiereController@store');
Route::get('matiere/{id}/details','MatiereController@details');
Route::get('matiere/{id}/edit','MatiereController@edit');
Route::post('matiere/{id}','MatiereController@update');
Route::delete('matiere/{id}','MatiereController@destroy');
/***********************Examen****************************************/
Route::get('examen/{id}/create','ExamenController@create');
Route::get('examens/{id}','ExamenController@store');
Route::get('matiere/{id}/details','MatiereController@details');
Route::get('examen/{id}','ExamenController@destroy');
Route::get('examen/{id}/edit','ExamenController@edit');
Route::post('examen/{id}','ExamenController@update');
//Route::get('download/{id}','ExamenController@getDownload');
/***********************Etudiant****************************************/
Route::get('etudiant/create','EtudiantController@create');
Route::post('etudiants','EtudiantController@store');
Route::get('etudiant/{id}/details','EtudiantController@details');
Route::delete('etudiant/{id}','EtudiantController@destroy');
Route::get('etudiant/{id}/edit','EtudiantController@edit');
Route::post('etudiant/{id}','EtudiantController@update');
/********************************************************************/
Route::get('promot/create','PromotController@create');
Route::get('promots','PromotController@store');
Route::get('promot/{id}/index','PromotController@index');
Route::get('/ajax-subcat',function(){
	$cat_id=Input::get('cat_id');
	$subcategories=Groupe::where('groupes.promots_id','=',$cat_id)->pluck('nomGroup','idGroup');
	return json_encode($subcategories);
	//return Response::json($subcategories);
});
/**************************************************************************/
Route::get('coder/{id}/create','PaquetController@create');
Route::get('coder/create','PaquetController@cr');//na7ih
Route::get('examen_de_matiere/{id}/promot/{idP}','PaquetController@create2');
Route::get('codage/{id}','PaquetController@codage');
Route::get('envoyer','PaquetController@affichage');
Route::post('codage','PaquetController@store');