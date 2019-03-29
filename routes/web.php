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

Route::get('properties/choose', 'PropertyController@choose')->name('properties.choose');
Route::get('properties/delete', 'PropertyController@delete')->name('properties.delete');
Route::delete('properties/{id}', 'PropertyController@destroy')->name('properties.destroy');
Route::resource('properties', 'PropertyController');

Route::get('locations/create/{id}', 'LocationController@create')->name('locations.create');
Route::post('locations/store', 'LocationController@store')->name('locations.store');
Route::get('locations/{id}/edit', 'LocationController@edit')->name('locations.edit');
Route::patch('locations/{id}', 'LocationController@update')->name('locations.update');
Route::get('locations/choose', 'LocationController@choose')->name('locations.choose');
Route::get('locations/updater', 'LocationController@updater')->name('locations.updater');

Route::get('contacts/create/{id}', 'ContactController@create')->name('contacts.create');
Route::post('contacts/store', 'ContactController@store')->name('contacts.store');
Route::get('contacts/{id}/edit', 'ContactController@edit')->name('contacts.edit');
Route::patch('contacts/{id}', 'ContactController@update')->name('contacts.update');
Route::get('contacts/choose', 'ContactController@choose')->name('contacts.choose');
Route::get('contacts/updater', 'ContactController@updater')->name('contacts.updater');

Route::get('features/create/{id}', 'FeatureController@create')->name('features.create');
Route::post('features/store', 'FeatureController@store')->name('features.store');
Route::get('features/{id}/edit', 'FeatureController@edit')->name('features.edit');
Route::patch('features/{id}', 'FeatureController@update')->name('features.update');
Route::get('features/choose', 'FeatureController@choose')->name('features.choose');
Route::get('features/updater', 'FeatureController@updater')->name('features.updater');

Route::get('images/create/{id}', 'ImageController@create')->name('images.create');
Route::post('images/store', 'ImageController@store')->name('images.store');
Route::get('images/{id}/edit', 'ImageController@edit')->name('images.edit');
Route::patch('images/{id}', 'ImageController@update')->name('images.update');
Route::get('images/choose', 'ImageController@choose')->name('images.choose');
Route::get('images/updater', 'ImageController@updater')->name('images.updater');

Route::get('tags/create/{id}', 'TagController@create')->name('tags.create');
Route::post('tags/store', 'TagController@store')->name('tags.store');
Route::get('tags/{id}/edit', 'TagController@edit')->name('tags.edit');
Route::patch('tags/{id}', 'TagController@update')->name('tags.update');
Route::get('tags/choose', 'TagController@choose')->name('tags.choose');
Route::get('tags/updater', 'TagController@updater')->name('tags.updater');

Route::get('videos/create/{id}', 'VideoController@create')->name('videos.create');
Route::post('videos/store', 'VideoController@store')->name('videos.store');
Route::get('videos/{id}/edit', 'VideoController@edit')->name('videos.edit');
Route::patch('videos/{id}', 'VideoController@update')->name('videos.update');
Route::get('videos/choose', 'VideoController@choose')->name('videos.choose');
Route::get('videos/updater', 'VideoController@updater')->name('videos.updater');