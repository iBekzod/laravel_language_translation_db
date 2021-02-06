<?php

use Illuminate\Support\Facades\Route;

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



Route::post('/language', 'App\Http\Controllers\LanguageController@changeLanguage')->name('language.change');

Route::resource('/languages', 'App\Http\Controllers\LanguageController');
// Route::post('/languages/{id}/update', 'App\Http\Controllers\LanguageController@update')->name('languages.update');
// Route::get('/languages/destroy/{id}', 'App\Http\Controllers\LanguageController@destroy')->name('languages.destroy');
Route::post('/languages/update_rtl_status', 'App\Http\Controllers\LanguageController@update_rtl_status')->name('languages.update_rtl_status');
Route::post('/languages/key_value_store', 'App\Http\Controllers\LanguageController@key_value_store')->name('languages.key_value_store');

Route::post('/env_key_update', 'BusinessSettingsController@env_key_update')->name('env_key_update.update');