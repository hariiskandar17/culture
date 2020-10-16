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

use Illuminate\Http\Resources\Json\Resource;

Auth::routes();

Route::get('/', function () {
    return view('user.dashboard');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/prov', 'HelpController@prov')->name('prov');
// Map
Route::get('/map', 'MapController@index')->name('map');
Route::get('/dataMap', 'MapController@mapData')->name('map');
Route::get('/mapIcon', 'MapController@iconMap');
// Crud
Route::resource('/article', 'ArticleController');
Route::resource('/profile', 'ProfileController');
Route::resource('/type-place', 'TypePlaceController');
Route::resource('/site', 'SitePlaceController');
// Help



// admin
// dashboard
Route::resource('/dashboard', 'DashboardController');
// end

// user
Route::resource('/user', 'UserController');
Route::get('/table/user', 'UserController@dataTable')->name('table.user');
// anduser
// lokasi
Route::resource('/lokasi', 'LokasiController');
Route::get('/table/lokasi', 'LokasiController@dataTable')->name('table.lokasi');
// andlokasi
// artikel
Route::resource('/artikel', 'ArtikelController');
Route::get('/table/artikel', 'ArtikelController@dataTable')->name('table.artikel');
// andartikel
// icon
Route::resource('/icon', 'IconController');
Route::get('/table/icon', 'IconController@dataTable')->name('table.icon');
// andicon
// lokasi culture
Route::resource('/culture', 'LokasiBudayaController');
Route::get('/table/culture', 'LokasiBudayaController@dataTable')->name('table.culture');
// end lokasi culture
// andadmin
