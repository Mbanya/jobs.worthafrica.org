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
Route::get('/filter_login', 'Auth\LoginController@showJobFilterLogin')->name('jobfilterLogin');
Route::post('/filter_login', 'Auth\LoginController@postJobFilterLogin');




Route::group(['middleware'=>'individual'], function(){
    Route::resource('jobs','JobController');
    Route::resource('flexjobs','FlexJobController');
    Route::resource('consultants','ConsultantController');
    Route::resource('mock','MockController');
    Route::get('board','JobController@search')->name('board');

});

Route::group(['middleware'=>'visitors'], function(){

    Route::get('/register','Auth\RegisterController@showRegister')->name('register');
    Route::post('/register','Auth\RegisterController@postRegister');
    Route::get('/organisation_register','Auth\RegisterController@showOrgRegister')->name('organisation_register');
    Route::post('/organisation_register','Auth\RegisterController@postOrgRegister');
    Route::post('/jobfilterregister','Auth\RegisterController@postJobFilterRegister');
    Route::get('/jobfilterregister','Auth\RegisterController@showJobFilterRegister')->name('jobfilterregister');
    Route::get('/forgot-password','ForgotPasswordController@Forgotpassword')->name('forgot-password');
    Route::post('/forgot-password','ForgotPasswordController@postForgotpassword');
    Route::get('/reset/{email}/{resetCode}','ForgotPasswordController@resetPassword');

});

//Job Filter & Organisation
Route::group(['middleware'=>'jobfilter','organisation','individual'],function(){

    Route::resource('dashboard','DashboardController');
    Route::get('/hire','DashboardController@hire')->name('findTalent');
    Route::get('/flexhire','DashboardController@flexhire')->name('flexhire');
    Route::get('/jobfilter','DashboardController@jobfilter')->name('jobfilter');
    Route::post('/flexhire','DashboardController@Postflexhire');
    Route::post('/hire','DashboardController@Posthire')->name('findTalent');
    Route::get('/profile','DashboardController@profile')->name('profile');
    Route::post('/jobfilter','DashboardController@postJobfilter');
    Route::resource('tor','TorController');
    Route::resource('posts','PostController');
});

Route::post('/logout','Auth\LoginController@logout')->name('logout');
Route::get('/activate/{email}/{activationCode}', 'ActivationController@activate');
Route::get('/activate_jobfilter/{email}/{activationCode}', 'ActivationController@jobfilter');
Route::get('/profile/{email}','ProfileController@profile');
Route::get('seekers','SeekerController@home')->name('job_seeker');
Route::get('employer','EmployerController@home')->name('employer');
Route::get('mock','SeekerController@mock')->name('mock');
Route::post('employer','EmployerController@post');
Route::post('seekers','SeekerController@post');
Route::get('organisation','PagesController@organisation')->name('organisation');
Route::get('account','PagesController@account')->name('account');
Route::get('seeker','PagesController@seeker')->name('seeker');



