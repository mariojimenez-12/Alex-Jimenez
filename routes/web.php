<?php

use App\Portafolio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
Route::get('/admin', 'HomeController@index')->name('admin');
//Portafolio
Route::get('admin/portafolio', 'PortafolioController@index')->name('portafolio.index');
Route::get('/admin/portafolio/create', 'PortafolioController@create')->name('portafolio.create');
Route::post('/admin/portafolio', 'PortafolioController@store')->name('portafolio.store');
Route::get('/admin/portafolio/{portafolio}/edit', 'PortafolioController@edit')->name('portafolio.edit');
Route::put('/admin/portafolio/{portafolio}', 'PortafolioController@update')->name('portafolio.update');
Route::delete('/admin/portafolio/{portafolio}', 'PortafolioController@destroy')->name('portafolio.delete');

Route::get('/', function () {
    return view('index');
});
Route::post('/', 'ContactoController@store')->name('contacto.store');

Route::get('/portafolio', function () {
    $portafolios = Portafolio::all();

    return view('portafolio', compact('portafolios'));
});

Auth::routes();