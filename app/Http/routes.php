<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
    
});
Route::get('/contacts', function () {
    return view('contacts');
    
});
Route::get('/accueil', function () {
    return view('accueil');
    
});


Route::get('/contact/{HH}', function ($latifa) {
    //return view('contact');
    echo "contact name:".$latifa;
});

Route::get('/contact/{HH}/ID/{ID}', function ($latifa,$id) {
    //return view('contact');
    echo "contact name:".$latifa;
     echo "<br>contact id:".$id;

})->where(['name'=>'[a-zA-Z]+','id'=>'[0-9]+']);

Route::get('/articles', 'ArticleContoller@articles') ;
Route::get('/article/{id}', 'ArticleContoller@article') ;
Route::get('/article', 'ArticleContoller@newArticle') ;
Route::get('/listarticle', 'ArticleContoller@listArticle') ;
Route::auth();

Route::get('/home', 'HomeController@index');


           //
Route::get('articles/create', 'ArticleContoller@create') ;
Route::post('articles', 'ArticleContoller@store') ;

Route::get('articles', 'ArticleContoller@index');

Route::get('articles/{id}/edit', 'ArticleContoller@edit');
Route::put('articles/{id}', 'ArticleContoller@update');
Route::delete('articles/{id}', 'ArticleContoller@destroy');


