<?php

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', action:'App\Http\Controllers\HomeController@index');

Route::get('/login', action:'App\Http\Controllers\AuthController@login_index');
Route::post('/login', action:'App\Http\Controllers\AuthController@login_post');

Route::get('/register', action:'App\Http\Controllers\AuthController@register_index');
Route::post('/register', action:'App\Http\Controllers\AuthController@register_post');

Route::get('/detail/{id}', action:'App\Http\Controllers\HomeController@detail');
Route::get('/admin', function () {
    $username = Session::get('user_admin');
    if(!$username){
        return redirect('/login');
    }
    else{
        return view('admin');
    }
    return view('admin');
});

Route::post('/add-to-cart', action:'App\Http\Controllers\CartController@savecart');
Route::get('/load-cart', action:'App\Http\Controllers\CartController@loadcart');

Route::prefix('categories')->group(function () {
    Route::get('/index', [
    	'as'=>'categories.index',
    	'uses'=>'App\Http\Controllers\CategoryController@index'
    ]);
    Route::get('/create', [
    	'as'=>'categories.create',
    	'uses'=>'App\Http\Controllers\CategoryController@create'
    ]);
    Route::post('/save', [
    	'as'=>'categories.save',
    	'uses'=>'App\Http\Controllers\CategoryController@save'
    ]);
    Route::get('/edit/{id}', [
    	'as'=>'categories.edit',
    	'uses'=>'App\Http\Controllers\CategoryController@edit'
    ]);
    Route::post('/saveedit/{id}', [
    	'as'=>'categories.saveedit',
    	'uses'=>'App\Http\Controllers\CategoryController@saveedit'
    ]);
    Route::get('/delete/{id}', [
    	'as'=>'categories.delete',
    	'uses'=>'App\Http\Controllers\CategoryController@delete'
    ]);
});
Route::prefix('products')->group(function () {
    Route::get('/index', [
    	'as'=>'products.index',
    	'uses'=>'App\Http\Controllers\ProductController@index'
    ]);
    Route::get('/create', [
    	'as'=>'products.create',
    	'uses'=>'App\Http\Controllers\ProductController@create'
    ]);
    Route::post('/save', [
    	'as'=>'products.save',
    	'uses'=>'App\Http\Controllers\ProductController@save'
    ]);
    Route::get('/edit/{id}', [
    	'as'=>'products.edit',
    	'uses'=>'App\Http\Controllers\ProductController@edit'
    ]);
    Route::post('/saveedit/{id}', [
    	'as'=>'products.saveedit',
    	'uses'=>'App\Http\Controllers\ProductController@saveedit'
    ]);
    Route::get('/delete/{id}', [
    	'as'=>'products.delete',
    	'uses'=>'App\Http\Controllers\ProductController@delete'
    ]);
});
