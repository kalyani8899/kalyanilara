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

Route::get('/', function () {
    return view('welcome');
});
Route::get('store','ProductController@getForm')->name('store.form');
Route::post('store/submit','ProductController@submitForm')->name('store.form.submit');
Route::get('store/table','ProductController@getTable')->name('store.table');
Route::get('store/edit/form/{id}','ProductController@editForm')->name('store.form.edit');
Route::post('store/update/form/{id}','ProductController@updateForm')->name('store.form.update');
Route::get('store/search/table', 'ProductController@search')->name('store.table.search');
Route::post('store/deleteall/table', 'ProductController@deleteall')->name('store.table.deleteall');
Route::get('/store/destroy', 'ProductController@destroy')->name('store.form.delete');
Route::get('export','ProductController@export')->name('export');
