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

 Route::get('single', function () {
    return view('single');
  });

Route::get('store','ProductController@getForm')->name('store.form');
Route::post('store/submit','ProductController@submitForm')->name('store.form.submit');
Route::get('store/table','ProductController@getTable')->name('store.table');
Route::get('store/edit/form/{id}','ProductController@editForm')->name('store.form.edit');
Route::post('store/update/form/{id}','ProductController@updateForm')->name('store.form.update');
Route::get('store/delete/form/{id}','ProductController@deleteForm')->name('store.form.delete');
Route::get('store/search/table','ProductController@search')->name('store.table.search');
Route::get('store/deleteall/table','ProductController@deleteall')->name('store.table.deleteall');
Route::get('store/destroy','ProductController@destroy')->name('store.form.delete');
Route::get('export','ProductController@export')->name('export');

Route::get('category','CategoryController@getCategories')->name('category.form');
Route::post('category/submit','CategoryController@submitForm')->name('category.submit');
Route::get('category/table','CategoryController@gettable')->name('category.table');
Route::get('category/edit/form/{id}','CategoryController@editform')->name('category.form.edit');
Route::put('category/update/form/{id}','CategoryController@updateform')->name('category.form.update');
Route::get('category/deleteall/table','CategoryController@deleteall')->name('category.table.deleteall');
Route::get('/category/destroy','CategoryController@destroy')->name('category.form.delete');
Route::get('category/delete/form/{id}','CategoryController@deleteform')->name('category.form.delete');

Route::get('/','FrontController@getData')->name('data');

Route::get('blog/{id}','FrontController@blog')->name('blog');
Route::get('contact','FrontController@contact')->name('contact');
Route::get('single','FrontController@single')->name('single');

Route::get('profileupdate', 'HomeController@profileEdit')->name('profile.update');
Route::post('profileupdate', 'HomeController@profileEditUpdate')->name('profile.store');

Route::get('role','RoleController@getRoles')->name('role.form');
Route::post('role/submit','RoleController@submitForm')->name('role.submit');
Route::get('role/table','RoleController@getTable')->name('role.table');
Route::get('role/edit/form/{id}','RoleController@editform')->name('role.form.edit');
Route::put('role/update/form/{id}','RoleController@updateForm')->name('role.form.update');
Route::get('role/deleteall/table','RoleController@deleteall')->name('role.table.deleteall');
Route::get('/role/destroy','RoleController@destroy')->name('role.form.delete');
Route::get('role/delete/form/{id}','RoleController@deleteForm')->name('role.form.delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
