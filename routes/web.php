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
Route::get('/','PagesController@home')->name('index');
Route::get('about', 'PagesController@about')->name('about');
Route::resource('contact','Contact');
Route::get('pricing', 'PagesController@pricing')->name('pricing');
Route::get('consult_hub','ConsultHubController@home')->name('consult_hub');
Route::get('success','PagesController@success')->name('success');
Route::get('/login','Auth\LoginController@showLogin')->name('login');
Route::post('/login','Auth\LoginController@postLogin');
Route::post('/jflogin','Auth\LoginController@jflogin')->name('jflogin');


Route::group(['middleware'=>'individual'], function(){
    Route::resource('jobs','JobController');
    Route::resource('flexjobs','FlexJobController');
    Route::resource('consultants','ConsultantController');
    Route::resource('mock','MockController');





});

Route::group(['middleware'=>'organisation'], function(){
    Route::resource('flexhire','FlexHireController');
    Route::resource('hire','HireController');
    Route::get('success','PagesController@success')->name('success');
    Route::resource('tor','TorController');
    Route::resource('posts','PostController');




});

Route::group(['middleware'=>'visitors'], function(){

    Route::get('/register','Auth\RegisterController@showRegister')->name('register');
    Route::post('/register','Auth\RegisterController@postRegister');
    Route::get('/organisation_register','Auth\RegisterController@showOrgRegister')->name('organisation_register');
    Route::post('/organisation_register','Auth\RegisterController@postOrgRegister');
    Route::get('/forgot-password','ForgotPasswordController@Forgotpassword')->name('forgot-password');
    Route::post('/forgot-password','ForgotPasswordController@postForgotpassword');
    Route::get('/reset/{email}/{resetCode}','ForgotPasswordController@resetPassword');




});

Route::post('/logout','Auth\LoginController@logout')->name('logout');
Route::get('/activate/{email}/{activationCode}', 'ActivationController@activate');
Route::get('/profile/{email}','ProfileController@profile');
Route::get('seekers','SeekerController@home')->name('job_seeker');
Route::get('employer','EmployerController@home')->name('employer');
Route::get('mock','SeekerController@mock')->name('mock');
Route::post('employer','EmployerController@post');
Route::post('seekers','SeekerController@post');
Route::get('organisation','PagesController@organisation')->name('organisation');
Route::get('seeker','PagesController@seeker')->name('seeker');


