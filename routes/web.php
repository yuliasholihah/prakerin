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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/about', function () {
    return view('about');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'FrontendController@index');
Route::get('about', 'FrontendController@about');
Route::get('contact', 'FrontendController@contact');
Route::get('archive', 'FrontendController@archive');
Route::get('typo', 'FrontendController@typo');
Route::get('kuliner', 'FrontendController@kuliner');
Route::get('traveling', 'FrontendController@traveling');

Route::group(['prefix'=>'admin','middleware'=>['auth']],
function () {
    Route::get('/', function () {
        return view('backend.index');
    });
    route::resource('kategori','CategoriController');
    route::resource('tag','TagController');
    route::resource('artikel','ArtikelController');
}
);

Route::get('kategori', function () {
    return view('kategori');
});

Route::get('tag', function () {
    return view('tag');
});

Route::get('artikel', function () {
    return view('artikel');
});
