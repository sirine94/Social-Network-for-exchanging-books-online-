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

Route::get('ajouter',array('as'=> 'ajouter','uses'=> 'AjouterController@index'));
Route::get('/welcome','WelcomeController@welcome');
Route::get('/home', array('as'=>'home' , 'uses' =>'HomeController@index'));
Route::resource('bibliotheque','BibliothequeController');
Route::get('journal/{id}', array('as'=>'journal.index' , 'uses'=>'JournalController@index'));
Route::get('biblio/{id}', array('as'=> 'biblio.index', 'uses' => 'BiblioController@index'));
Route::get('biblio/{idu}/{idb}',array('as'=>'biblio.show','uses' => 'BiblioController@show'));

Route::get('relation/{id}',array( 'as' => 'relation.create', 'uses' => 'RelationsController@create'));
Route::get('norelation/{id}',array( 'as' => 'relation.delete', 'uses' => 'RelationsController@delete'));
Route::get('relations',array('as' => 'relations','uses' => 'RelationsController@index'));
// Route après la demande de l'echange
Route::get('validate/{id}',array('as' => 'validate.index','uses' =>  'ValidationController@index')) ;
// Route après l'acceptation de demande d'echange
Route::get('accept/{id}',array('as' => 'validate.accept','uses' =>  'ValidationController@accept')) ;
// Route après le refus du demande
Route::get('refuse/{id}',array('as' => 'validate.refuse','uses' =>  'ValidationController@refuse')) ;
Route::get('reponse','ValidationController@reponse');
//Route après le clique sur bouton 'Echange terminée'
Route::get('termine/{id}',array('as' => 'validate.termine','uses' =>  'ValidationController@termine'));
Route::get('notifications' ,array('as' => 'notifications', 'uses' => 'NotificationsController@index'));
Route::get('contact/{id}',array('as' => 'contact', 'uses' => 'ContactsController@index')) ;
Route::post('contact',array('as' => 'contact.store', 'uses' => 'ContactsController@store'));

Route::get('rien','Controller@rien');
Route::post('ajouter/valider',array('as'=> 'ajouter.valider', 'uses'=> 'AjouterController@valider'));
Route::auth();
