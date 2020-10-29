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

Route::get('/', 'HomeController@index')->name('/');

Route::get('/map', 'MapController@index')->name('map.index');

Route::post('/mail', 'MailController@send')->name('send-email');

Route::get('/v-2', 'MapController@v2')->name('v2.index');
Route::post('/dataMap', 'MapController@mapData')->name('map');
Route::post('/mapProv', 'MapController@provData');
Route::post('/mapKab', 'MapController@kabData');
Route::post('/mapKec', 'MapController@kecData');
Route::post('/mapKat', 'MapController@katData');

Route::resource('/tentang', 'TentangController');

Route::resource('/kontak', 'KontakController');

Route::resource('/kategori', 'KategoriController');

Route::resource('/ulas', 'UlasanController');

// Search
Route::get('/budaya', 'HomeController@budaya');
Route::post('/car-sej', 'SearchController@sejarah');

// Detail
Route::get('/detail/{id}', 'HomeController@detail')->name('detail');


//
// Route::get('/tentang', 'UsersController@about')->name('tentang');
// Route::get('/kontak', 'UsersController@kontak')->name('kontak');
// Route::get('/kategori', 'UsersController@kategori')->name('kategori');
//
// //home
// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/prov', 'HelpController@prov')->name('prov');
// // profile
// Route::resource('/profile', 'ProfileController');
// // Route::get('/password', 'SetingController')->name('seting');
// // Map
// Route::get('/map', 'MapController@index')->name('map');
// Route::get('/dataMap', 'MapController@mapData')->name('map');
// Route::get('/mapIcon', 'MapController@iconMap');
// // Crud
// Route::resource('/article', 'ArticleController');
// Route::resource('/type-place', 'TypePlaceController');
// Route::resource('/site', 'SitePlaceController');
// // Help
//


// admin
// dashboard
Route::resource('/admin', 'DashboardController');
// end
// profile
Route::resource('/profileadmin', 'ProfileAdminController');
Route::get('/reset', 'ProfileAdminController@reset');
// andprofile
// user
Route::resource('/user', 'UserController');
Route::get('/table/user', 'UserController@dataTable')->name('table.user');
// anduser
// lokasi
Route::resource('/lokasi', 'LokasiController');
// Route::resource('/simpanData', 'LokasiController@save');
Route::get('/table/lokasi', 'LokasiController@dataTable')->name('table.lokasi');
// andlokasi
// icon
Route::resource('/icon', 'IconController');
Route::get('/table/icon', 'IconController@dataTable')->name('table.icon');
// andicon
// lokasi culture
Route::resource('/culture', 'LokasiBudayaController');
Route::resource('/mail', 'EmailController');
Route::get('/table/culture', 'LokasiBudayaController@dataTable')->name('table.culture');
// end lokasi culture
// andadmin
