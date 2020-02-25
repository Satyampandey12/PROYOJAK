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
    return view('index');
});

Route::get('/penroll', function () {
    return view('penroll');
});
Route::get('/venroll', function () {
    return view('venroll');
});

Route::post('venroll/store', 'RegistrationController@store')->name('venroll-store');
Route::post('penroll/save', 'RegistrationController@save')->name('penroll-save');


Route::get('events', 'Event\EventController@index')->name('events');
Route::get('events/add', 'Event\EventController@add')->name('event-add');
Route::post('events/save', 'Event\EventController@save')->name('event-save');
Route::get('events/view/{event}', 'Event\EventController@view')->name('event-view');
Route::get('events/list', 'Event\EventController@listEvents')->name('event-list');
Route::get('events/edit/{event}', 'Event\EventController@editEvents')->name('event-edit');
Route::post('events/upadte', 'Event\EventController@updateEvents')->name('event-update');
Route::get('events/my_invited_events','Event\EventController@myInvitedEvents')->name('my-invited-events');
Route::get('events/accept_invitation/{invitation_id}','Event\EventController@acceptInvitation');
Route::get('events/decline_invitation/{invitation_id}','Event\EventController@declineInvitation');

Route::get('auth/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('auth/login', 'Auth\LoginController@login');
Route::get('auth/logout', ['as' => 'logout', 'uses'=>'Auth\LoginController@logout']);

Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('auth/register', 'Auth\RegisterController@register');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.reset');

Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@dashboard')->name('home');
//Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');


//Route::get('/landingpage', 'EventController@landingpage.front')->name('landingpage');

Route::get('/landingpage', function () {
    return view('landing_page.front');
});