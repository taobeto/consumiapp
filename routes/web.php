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
// Route::get('/', 'HomeController@index')->middleware('auth')->name('home');
// Route::get('/arduino', function(){
//     return 'paso la petición';
// });
Route::post('/crear-electrolinera', 'ElectrolineraController@store')->middleware('auth');
Route::get('/listar-electrolineras', 'ElectrolineraController@index');

Auth::routes();
