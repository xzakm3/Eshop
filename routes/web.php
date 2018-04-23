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








Route::get('/', 'HomeController@index')->name('landing_page');
Route::get('getsubcategories', 'SubcategoryController@index');

Auth::routes();

Route::get('admin/', 'AdminController@show')->middleware('admin')->name('admin');
Route::get('admin/products', 'ProductController@index')->middleware('admin')->name('product_management');
Route::get('admin/products/create', 'ProductController@create')->middleware('admin')->name('add_product');

Route::get('admin/products/search', 'ProductController@searchedProducts')->middleware('admin')->name('search_products');
Route::post('admin/products', 'ProductController@store')->middleware('admin');
Route::put('admin/products/{product}', 'ProductController@update')->middleware('admin')->name('update_product');
Route::get('admin/products/filtered/{category}/{subcategory}', 'ProductController@filteredIndex')->name('search_filtered_products');
Route::get('admin/products/{product}/edit', 'ProductController@edit')->middleware('admin')->name('edit_product');
Route::delete('admin/products/{product}', 'ProductController@destroy')->middleware('admin')->name('delete_product');


