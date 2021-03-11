<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 
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


// Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('admin')->group(function () {
    Auth::routes();
    Route::get('home','admin\homeController@home');
    // Route::get('features','admin\FeatureController@home_new')->name('admin.features.home');
    Route::resource('feature','admin\FeatureController');
});

Route::resource('category', 'admin\categoriesController');
Route::get('category/{id}/delete' , 'admin\categoriesController@destroy');  
Route::resource('member', 'admin\membersController');
Route::get('member/{id}/delete' , 'admin\membersController@destroy'); 


// Route::get('setting','admin\settingController@show')->name('setting');
Route::get('setting','settingController@show')->name('setting');

Route::post('settingupdate','settingController@update')->name('settingupdate');

