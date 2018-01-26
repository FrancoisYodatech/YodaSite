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

Route::get('/', 'WelcomeController@index');
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('article/{no}', 'Template1Controller@showArticle')->where('$no', '[0-9]+');
// Route::get('article/{no}', function ($no) {
//     return view('article')->withnumero($no); // peut s'écrire :   with('numero', $no);
// })->where('no', '[0-9]+');
Route::get('facture/{no}', 'Template1Controller@showFacture')->where('$no', '[0-9]+');
// Route::get('facture/{no}', function ($no) {
//     return view('facture')->withnumero($no); // peut s'écrire :   with('numero', $no);
// })->where('no', '[0-9]+');

Route::get('/view1', function(){
  return view('View1');
});

Route::get('users', 'UsersController@create');
Route::post('users', 'UsersController@store');

Route::get('contactForm', 'ContactController@create');
Route::post('contactForm', 'ContactController@store');

Route::get('photo', 'PhotoController@create');
Route::post('photo', 'PhotoController@store');
