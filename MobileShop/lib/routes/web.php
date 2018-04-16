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
    return view('backend/login');
});
Route::group(['prefix'=>'backend'], function(){
	Route::group(['middleware'=>'CheckLogin'], function() {
	    Route::get('/login', 'MyController@getLogin');
	    Route::post('/login', 'MyController@postLogin');
	});

	Route::group(['middleware'=>'CheckUser'], function() {
		Route::get('/home', 'MyController@home');
		Route::get('/master', 'MyController@master');
		Route::get('/logout', 'MyController@logout');

		Route::group(['prefix'=>'add'], function() {
		   	Route::get('/', 'MyController@getAdd');
	    	Route::post('/', 'MyController@postAdd');
		});

		Route::group(['prefix'=>'edit'], function() {
		   	Route::get('/{id}', 'MyController@getEdit');
	    	Route::post('/{id}', 'MyController@postEdit');
		});

		Route::get('/del/{id}', 'MyController@del');
		
		Route::group(['prefix'=>'category'], function(){
			Route::get('/', 'CategoryController@getCate');
			Route::post('/', 'CategoryController@postCate');
			Route::get('/edit/{cate_id}', 'CategoryController@getEditCate');
			Route::post('/edit/{cate_id}', 'CategoryController@postEditCate');
			Route::get('/del/{cate_id}', 'CategoryController@delCate');
		});

		Route::group(['prefix'=>'product'], function(){
			Route::get('/', 'ProductController@getProd');
			Route::get('/add/', 'ProductController@getAddProd');
			Route::post('/add/', 'ProductController@postAddProd');
			Route::get('/edit/{prod_id}', 'ProductController@getEditProd');
			Route::post('/edit/{prod_id}', 'ProductController@postEditProd');
			Route::get('/del/{prod_id}', 'ProductController@delProd');
		});
	});
});

Route::group(['prefix'=>'frontend'], function(){
	Route::get('/home', 'FrontendController@home');
	Route::get('/cart', 'FrontendController@cart');
	Route::get('/complete', 'FrontendController@complete');
	Route::get('/category/{id}/{cate_slug}.html', 'FrontendController@category');
	Route::get('/details/{id}', 'FrontendController@getDetails');
	Route::get('/email', 'FrontendController@email');
	Route::get('/search', 'FrontendController@search');
	Route::post('/details/{id}', 'FrontendController@postDetails');
	Route::group(['prefix' => 'cart'], function() {
	    Route::get('add/{id}', 'CartController@getAddCart');
	    Route::get('show', 'CartController@getShowCart');
	    Route::get('delete/{id}', 'CartController@getDelCart');
	    Route::get('update', 'CartController@getUpdateCart');
	});
});


