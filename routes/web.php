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
Route::get('contact', 'PagesController@contact')->name('contact');
Route::get('pricing', 'PagesController@pricing')->name('pricing');
Route::get('consult_hub','ConsultHubController@home')->name('consult_hub');


Route::group(['middleware'=>'individual'], function(){
    Route::resource('jobs','JobController');
    Route::resource('flexjobs','FlexJobController');
    Route::get('success','PagesController@success')->name('success');
    Route::resource('mock','MockController');
    Route::resource('consultants','ConsultantController');

});

Route::group(['middleware'=>'organisation'], function(){
    Route::resource('flexhire','FlexHireController');
    Route::resource('hire','HireController');
    Route::get('success','PagesController@success')->name('success');
    Route::resource('tor','TorController');

});
Route::group(['middleware'=>'visitors'], function(){

    Route::get('/login','Auth\LoginController@showLogin')->name('login');
    Route::post('/login','Auth\LoginController@postLogin');
    Route::get('/sign-up','Auth\RegisterController@showSignUp')->name('sign-up');

    Route::get('/register','Auth\RegisterController@showRegister')->name('register');
    Route::post('/register','Auth\RegisterController@postRegister');
    Route::get('/organisation_register','Auth\RegisterController@showOrgRegister')->name('organisation_register');
    Route::post('/organisation_register','Auth\RegisterController@postOrgRegister');
    Route::get('/forgot-password','ForgotPasswordController@Forgotpassword')->name('forgot-password');
    Route::post('/forgot-password','ForgotPasswordController@postForgotpassword');
    Route::get('/reset/{email}/{resetCode}','ForgotPasswordController@resetPassword');

    Route::get('seekers','SeekerController@home')->name('job_seeker');
    Route::get('employer','EmployerController@home')->name('employer');



});

Route::post('/logout','Auth\LoginController@logout')->name('logout');
Route::get('/activations/{email}/{activationCode}', 'ActivationController@activate');
Route::get('/profile/{email}','ProfileController@profile');



