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

use App\Dossier;
use Illuminate\Support\Facades\DB;

Auth::routes();
Route::get('/', 'IndexController@index')->name('Home');
Route::get('/entreprise', 'IndexController@entreprise')->name('Entreprise');
Route::get('/support', 'IndexController@support')->name('Support');
Route::get('/about', 'IndexController@about')->name('About');
Route::get('/admin', 'AdminController@index');
Route::resource('article', 'ArticaleController');
Route::post('/addImage', 'ArticaleController@addImage')->name('addImage');
Route::get('/home', 'HomeController@index');
Route::post('/client', 'DossierController@client')->name('client');
Route::post('/test', 'DossierController@test')->name('test');
Route::post('/redirect', 'DossierController@redirect')->name('redirect');
