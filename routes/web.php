<?php
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','HomeController@index');
Route::get('/page/{id}','HomeController@page');

Route::get('/contact','ContactUsController@index');
Route::post('/contact/sendmessage','ContactUsController@sendMessage');
Route::post('/contact/sendmessage/ajax','ContactUsController@sendMessageAjax');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'auth'], function () {
     Route::resource('admin/special','SpecialController'); 
    
});
