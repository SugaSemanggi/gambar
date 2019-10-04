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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// ROOTCATEGORY
Route::get('/admin/root-category', 'RootCategoryController@index')->name('root-category.index');
Route::post('/admin/root-category', 'RootCategoryController@store')->name('root-category.store');
Route::get('/admin/root-category/view', 'RootCategoryController@view')->name('root-category.view');
Route::get('/admin/root-category/{id}', 'RootCategoryController@edit')->name('root-category.edit');
Route::put('/admin/root-category/update/{id}', 'RootCategoryController@update')->name('root-category.update');
Route::delete('/admin/root-category/{id}', 'RootCategoryController@delete')->name('root-category.delete');

// SUBCATEGORY
Route::get('/admin/sub-category', 'SubcategoryController@index')->name('sub-category.index');
Route::get('/admin/sub-category/form','SubCategoryController@form')->name('sub-category.form');
Route::post('/admin/sub-category/','SubCategoryController@store')->name('sub-category.store');
Route::get('/admin/sub-category/edit/{id}','SubCategoryController@edit')->name('sub-category.edit');
Route::put('/admin/sub-category/update/{id}', 'SubCategoryController@update')->name('sub-category.update');
Route::delete('/admin/sub-category/delete/{id}', 'SubCategoryController@delete')->name('sub-category.delete');

