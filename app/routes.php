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
// front Routes
Route::get('/', array('as' => 'home', 'uses' => 'PagesController@view'));
Route::get('/categories/{slug}', array('as' => 'category','uses' => 'ProductController@category'));

Route::get('/products',array('as' => 'products' ,'uses' => 'ProductController@index'));
Route::get('/products/{slug}',array('as' => 'showproduct','uses' => 'ProductController@show'));

Route::post('/products/add_cart/{id}',array('as' => 'add_cart', 'uses' => 'ProductController@add_cart'));
Route::get('/products/add_cart/{id}',array('as' => 'add_cart_get', 'uses' => 'ProductController@add_cart'));
Route::get('/products/remove_cart/{id}',array('as' => 'remove_cart', 'uses' => 'ProductController@remove_cart'));

Route::get('/shoppingcart',array('as' => 'shoppingcart','uses' => 'ProductController@view_cart'));
Route::post('/shoppingcart/update/{id}',array('as' => 'updatecart','uses' => 'ProductController@update_cart'));

Route::get('/checkout',array('as' => 'checkout','uses' => 'ProductController@checkout'));

Route::get('/{uri}', 'PagesController@view');
Route::get('/{uri}/{any}', 'PagesController@view');


// Admin routes
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

