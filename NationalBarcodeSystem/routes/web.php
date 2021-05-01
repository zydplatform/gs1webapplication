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

Route::get('/', function () {
    return view('welcome');
});

Route::get('barcoderequest','BarcodeController@BarcodeRequestView')->name('barcoderequest');
Route::get('addcompany','BusinessController@Company')->name('addcompany');
Route::get('login','UserController@Login')->name('login');

Route::get('finishbusiness','BusinessController@FinishBusiness')->name('finishbusiness');
Route::get('register','UserController@Register')->name('register');
Route::get('businessprofile','BusinessController@BusinessProfile')->name('businessprofile');

Route::get('clientbusinessprofile','BusinessController@ClientBusinessProfile')->name('clientbusinessprofile');

Route::post('registerbusiness', 'BusinessController@registerBusiness')->name('registerbusiness');

Route::post('district', 'BusinessController@addDistrict')->name('district');

//remove
Route::get('district', 'BusinessController@addDistrict')->name('district');

Route::post('country', 'BusinessController@addCountry')->name('country');

//remove
Route::get('country', 'BusinessController@addCountry')->name('country');

//remove
Route::get('registerbusiness', 'BusinessController@registerBusiness')->name('registerbusiness');

Route::get('products', 'ProductController@productCatalogue')->name('products');
Route::get('addproducts', 'ProductController@productadminCatalogue')->name('addproducts');

Route::get('dashboard', 'HomeController@index')->name('dashboard');

Route::get('admindashboard', 'HomeController@admin')->name('admindashboard');

Route::get('profile', 'ProfileController@edit')->name('profile');

Route::get('getprofile','BusinessController@getBusiness')->name('getprofile');

Route::get('getdistrict','BusinessController@getDistricts')->name('getdistrict');

Route::get('getcountries','BusinessController@getCountries')->name('getcountries');

Route::get('items','BusinessController@itemCatelogues')->name('items');

Route::get('contacts','BusinessController@businessContacts')->name('contacts');

Route::get('businesslines','BusinessController@businessLines')->name('businesslines');

Route::get('businesstypes','BusinessController@businessTypes')->name('businesstypes');

Route::get('businesslinemappings','BusinessController@businessLineMappings')->name('businesslinemappings');

Route::get('businessowners','BusinessController@businessOwners')->name('businessowners');

Route::get('businessproducts','ProductController@businessProducts')->name('businessproducts');

Route::get('productcodes','BarcodeController@businessProductCodes')->name('productcodes');

Route::post('createbusinesslines', 'BusinessController@addbusinessLines')->name('createbusinesslines');

//remove
Route::get('createbusinesslines', 'BusinessController@addbusinessLines')->name('createbusinesslines');

Route::post('createbusinesstypes', 'BusinessController@addbusinessTypes')->name('createbusinesstypes');

//remove
Route::get('createbusinesstypes', 'BusinessController@addbusinessTypes')->name('createbusinesstypes');

Route::post('createbusinessowners', 'BusinessController@addbusinessOwners')->name('createbusinessowners');

//remove
Route::get('createbusinessowners', 'BusinessController@addbusinessOwners')->name('createbusinessowners');


Route::post('createbusinesstypemappings', 'BusinessController@addbusinessTypemappings')->name('createbusinesstypemappings');

//remove
Route::get('createbusinesstypemappings', 'BusinessController@addbusinessTypemappings')->name('createbusinesstypemappings');

Route::get('businesstypemappings', 'BusinessController@businessMappingsTypes')->name('businesstypemappings');

//business steps
Route::get('step2', 'BusinessController@step2')->name('step2');
Route::get('step3', 'BusinessController@step3')->name('step3');
Route::get('step4', 'BusinessController@step4')->name('step4');
Route::get('step5', 'BusinessController@step5')->name('step5');
Route::get('step6', 'BusinessController@step6')->name('step6');
