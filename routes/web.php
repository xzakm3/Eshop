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
Route::get('products/search', 'ProductController@customerSearchedProducts')->name('customer_search_products');
Route::get('products/{product}', 'ProductController@show')->name('show_product');
Route::get('products/filtered/{category}/{subcategory}', 'ProductController@customerFilteredIndex')->name('customer_filtered_products');
Route::post('products/buy/{product}/more', 'ProductController@buyMany')->name('buy_many_product');
Route::get('products/buy/{product}', 'ProductController@buyOne')->name('buy_one_product');
Route::delete('shoppingcart/remove/{name}/{price}', 'ShoppingCartController@destroy')->name('remove_product_from_shopping_cart');
Route::get('shoppingcart/', 'ShoppingCartController@index')->name('customer_shopping_cart');
Route::post('delivery_and_payment/', 'ShoppingCartController@updateShoppingCart')->name('update_shopping_cart');
Route::get('delivery_and_payment/', 'ShoppingCartController@DeliveryAndPayment')->name('delivery_and_pay');
Route::post('last_control/', 'ShoppingCartController@updateInformationAboutUser')->name('update_delivery_data');
Route::get('last_control/', 'ShoppingCartController@LastControl')->name('last_control');
Route::get('order_confirmation/', 'ShoppingCartController@OrderConfirmation')->name('order_confirmation');

Auth::routes();

Route::middleware(['admin'])->group(function () {
	Route::get('admin/', 'AdminController@show')->name('admin');
	Route::get('admin/products', 'ProductController@index')->name('product_management');
	Route::get('admin/products/create', 'ProductController@create')->name('add_product');
	Route::get('admin/products/search', 'ProductController@searchedProducts')->name('search_products');
	Route::post('admin/products', 'ProductController@store');
	Route::put('admin/products/{product}', 'ProductController@update')->name('update_product');
	Route::get('admin/products/{product}/edit', 'ProductController@edit')->name('edit_product');
	Route::delete('admin/products/{product}', 'ProductController@destroy')->name('delete_product');
});
Route::get('admin/products/filtered/{category}/{subcategory}', 'ProductController@filteredIndex')->name('search_filtered_products');


