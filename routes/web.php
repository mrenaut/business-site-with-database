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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', 'PagesController@mainPage');
Route::get('/mortgageProtection', 'PagesController@mortgageProtection');
Route::get('/healthcareCoverage', 'PagesController@healthcareCoverage');
Route::get('/finalExpense', 'PagesController@finalExpense');
//Route::get('/contact', 'PagesController@contact');
Route::get('/employeeLogin', 'PagesController@employeeLogin');
//Route::get('/contactData', 'ontactsController@contactData');


Route::resource('contacts', 'ContactsController');

	
//Route::get('/contactData', 'ontactsController@contactData');






//Route::get('/contact', function () {
//	return view('pages.contact');
//});

//Route::get('/mortgageProtection', function () {
//	return view('pages.mortgageProtection');
//});
//
//Route::get('/healthcareCoverage', function () {
//	return view('pages.healthcareCoverage');
//});
//
//
//
////example
//Route::get('/users/{id}/{name}', function ($id, $name) {
//return 'Thsi is user ' .$name.' with an id of '.$id;
//});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
