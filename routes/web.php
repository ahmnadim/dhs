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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// frontend route
Route::get('/', 'HomeController@index')->name('welcome');
Route::get("property/details/{id}", "HomeController@showPropertyDetails")->name('property.details');
Route::get('contactus','HomeController@contactus')->name('contact');
Route::get('aboutus','HomeController@aboutus')->name('about');
Route::post('property-by-search','HomeController@propertyBySearch')->name('property-by-search');
Route::get('properties','FrontendController@properties')->name('all-properties');
Route::get('agents','FrontendController@agents')->name('agents');

//subscribe route
Route::post('subscribe','SubscriberController@subscribe')->name('subscribe');

//admin routes
Route::group(['as'=>'admin.','prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth','admin']],function(){
	Route::get('dashboard','DashboardController@index')->name('dashboard');
	Route::resource('property','PropertyController');

	Route::put('property/{property}/approve','PropertyController@approve')->name('property.approve');
	Route::get('profile','DashboardController@profile')->name('profile');

	Route::get('allsubscriber','DashboardController@allsubscriber')->name('property.subscriber');
	Route::get('alluser','DashboardController@alluserMethod')->name('our.user');
	Route::get('agents/add','DashboardController@addagent')->name('agent.add');
	Route::post('agents/add','DashboardController@store')->name('agent.add.post');
	Route::get('agents','DashboardController@agents')->name('agents');
	Route::get('edit-agents/{id}','DashboardController@editAgent')->name('agent.edit');
	Route::delete('/subscriber/{id}/delete','DashboardController@deletesubscriber')->name('subscriber.delete');

	Route::get('sitetitle', 'DashboardController@sitetitle')->name('sitetitle');
	Route::get('changetitle', 'DashboardController@change')->name('sitetitle.change');
	Route::put('changesitetitle', 'DashboardController@changesitetitle')->name('changesitetitle');

});

//user routes
Route::group(['as'=>'user.','prefix'=>'user', 'namespace'=>'User', 'middleware'=>['auth','user']],function(){

	Route::get('dashboard','DashboardController@index')->name('dashboard');
	Route::resource('property','PropertyController');
	Route::get('profile','DashboardController@profile')->name('profile');

	Route::put('property/{property}/publish','PropertyController@publish')->name('property.publish');
});



