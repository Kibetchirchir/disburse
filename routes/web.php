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

Route::get('/about', function () {
    return view('about');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/company', function () {
    return view('companyregistration');
});
Route::post('/company/register',  'CompanyController@register');
//Route::post('/company/shareholder/', 'CompanyController@shareholder');
Route::post('{id}/shareholder', [
    'as'   => 'shareHolder',
    'uses' => 'CompanyController@shareholder',

]);


Route::get('/company/shareholder/embed', function () {
    return view('shareholdersregistration');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');
Route::get('/portal', function () {
    return view('companyPortal');
});

Route::post('/create', [
    'as'   => 'showEditUser',
    'uses' => 'CompanyController@adduser',

]);
Route::get('/firsttime/{token}', [
    'as'   => 'showEditUser',
    'uses' => 'UserRegistration@verify',
]);

/**
 * admin
 */

Route::post('/admin/doctype', [
   'as' => 'adddocument',
    'uses' => 'AdminController@DocumentType',
]);

Route::post('/admin/conttype', [
    'as' => 'addContact',
    'uses' => 'AdminController@ContactsType',
]);
