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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['check_admin_panel'],'prefix'=>'admin','namespace'=>'admin','as'=>'admin.'],function (){
    Route::resource('/posts','AdminPostController');
    Route::resource('/paneladmin','AdminDashbordController');
    Route::resource('/tags','AdminTagController');







});
Route::group(['middleware'=>['check_client_panel'],'prefix'=>'client','namespace'=>'client'],function (){

Route::resource('/clientPosts','ClientPostController');
Route::resource('/panel','ClientDashbordController');
Route::get('/','evryClientPostController@index');
Route::resource('/tags','ClientTagController');



});


