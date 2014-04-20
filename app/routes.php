<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::get('/', function() {
    return View::make('hello');
});
Route::get('user/login', function() {
    return View::make('login');
});

Route::post('user/login', function() {
    // Set login credentials
    $credentials = array(
        'email' => Input::get('email'),
        'password' => Input::get('password'),
    );

    $remember = Input::get('remember') ? true : false;

    // Try to authenticate the user
    $user = Sentry::authenticate($credentials, $remember);

    return Redirect::intended('admin');
});
Route::get('user/logout', function() {
    Sentry::logout();

    return Redirect::to('user/login');
});
Route::post('user/logout', function() {
    Sentry::logout();

    return Redirect::to('user/login');
});

Route::get('{model}/a/file', array(
    'as' => 'admin_display_file',
    'uses' => 'Frozennode\Administrator\AdminController@displayFile'
));

