<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','App\Http\Controllers\Frontend\PagesController@home')->name('homepage');

Route::group(['prefix'=>'products'], function(){
    // All products page view
    Route::get('/','App\Http\Controllers\Frontend\ProductsController@index')->name('product.all');
    // single product page view
    Route::get('/{slug}','App\Http\Controllers\Frontend\ProductsController@show')->name('product.show');
});

Route::group(['prefix'=>'categories'], function(){
    
    // Category page view
    Route::get('/','App\Http\Controllers\Frontend\CategoriesController@index')->name('category.all');
    // Single (parent/child) Category page view
    Route::get('/{slug}','App\Http\Controllers\Frontend\CategoriesController@show')->name('category.show');
});



/*
|--------------------------------------------------------------------------
| Backend Admin Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix'=>'admin'], function(){

 
 Route::get('/dashboard','App\Http\Controllers\Backend\PageController@dashboard')->name('admin.dashboard');
        // Brands route
    Route::group(['prefix'=>'/brand'], function(){
        Route::get('/manage','App\Http\Controllers\Backend\BrandController@index')->name('brands.manage');
        Route::get('/create','App\Http\Controllers\Backend\BrandController@create')->name('brands.create');
        Route::post('/store','App\Http\Controllers\Backend\BrandController@store')->name('brands.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\BrandController@edit')->name('brands.edit');
        Route::post('edit/{id}','App\Http\Controllers\Backend\BrandController@update')->name('brands.update');
        Route::post('destroy/{id}','App\Http\Controllers\Backend\BrandController@destroy')->name('brands.destroy');
        });

    // Category route
    Route::group(['prefix'=>'/category'], function(){
        Route::get('/manage','App\Http\Controllers\Backend\CategoryController@index')->name('category.manage');
        Route::get('/create','App\Http\Controllers\Backend\CategoryController@create')->name('category.create');
        Route::post('/store','App\Http\Controllers\Backend\CategoryController@store')->name('category.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\CategoryController@edit')->name('category.edit');
        Route::post('edit/{id}','App\Http\Controllers\Backend\CategoryController@update')->name('category.update');
        Route::post('destroy/{id}','App\Http\Controllers\Backend\CategoryController@destroy')->name('category.destroy');
        });
    
    // Product route
    Route::group(['prefix'=>'/product'], function(){
        Route::get('/manage','App\Http\Controllers\Backend\ProductController@index')->name('product.manage');
        Route::get('/create','App\Http\Controllers\Backend\ProductController@create')->name('product.create');
        Route::post('/store','App\Http\Controllers\Backend\ProductController@store')->name('product.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\ProductController@edit')->name('product.edit');
        Route::post('edit/{id}','App\Http\Controllers\Backend\ProductController@update')->name('product.update');
        Route::post('destroy/{id}','App\Http\Controllers\Backend\ProductController@destroy')->name('product.destroy');
        });

    // Division route
    Route::group(['prefix'=>'/division'], function(){
        Route::get('/manage','App\Http\Controllers\Backend\DivisionController@index')->name('division.manage');
        Route::get('/create','App\Http\Controllers\Backend\DivisionController@create')->name('division.create');
        Route::post('/store','App\Http\Controllers\Backend\DivisionController@store')->name('division.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\DivisionController@edit')->name('division.edit');
        Route::post('edit/{id}','App\Http\Controllers\Backend\DivisionController@update')->name('division.update');
        Route::post('destroy/{id}','App\Http\Controllers\Backend\DivisionController@destroy')->name('division.destroy');
        });
    
    // District route
    Route::group(['prefix'=>'/district'], function(){
        Route::get('/manage','App\Http\Controllers\Backend\DistrictController@index')->name('district.manage');
        Route::get('/create','App\Http\Controllers\Backend\DistrictController@create')->name('district.create');
        Route::post('/store','App\Http\Controllers\Backend\DistrictController@store')->name('district.store');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\DistrictController@edit')->name('district.edit');
        Route::post('edit/{id}','App\Http\Controllers\Backend\DistrictController@update')->name('district.update');
        Route::post('destroy/{id}','App\Http\Controllers\Backend\DistrictController@destroy')->name('district.destroy');
        });
    
});