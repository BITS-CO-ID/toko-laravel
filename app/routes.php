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
Route::get('/fb', array('as' => 'fb', function() {
// get data from input
$code = Input::get('code');
// get fb service
$fb = OAuth::consumer('Facebook');

// check if code is valid
// if code is provided get user data and sign in
if (!empty($code)) {

    // This was a callback request from facebook, get the token
    $token = $fb->requestAccessToken($code);

    // Send a request with it
    $result = json_decode($fb->request('/me'), true);

    $message = 'Your unique facebook user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
    echo $message . "<br/>";

    //Var_dump
    //display whole array().
    dd($result);
}
// if not ask for permission first
else {
    // get fb authorization
    $url = $fb->getAuthorizationUri();

    // return to facebook login url
    return Redirect::to((string) $url);
}
}));
Route::get('/twitter-auth', array('as' => 'twitter', function() {
// get data from input
//    $code = Input::get('code');
$code = Input::get('oauth_token');
$oauth_verifier = Input::get('oauth_verifier');
// get fb service
$twitter = OAuth::consumer('Twitter');
// check if code is valid
// if code is provided get user data and sign in
if (!empty($code)) {
    // This was a callback request from facebook, get the token
    $token = $twitter->requestAccessToken($code, $oauth_verifier);
//        $token = $fb->requestAccessToken($code);
    // This was a callback request from google, get the token
    // Send a request with it
    $result = json_decode($twitter->request('account/verify_credentials.json'), true);
    $status = json_decode($twitter->request('statuses/user_timeline.json?count=1'), true);

    echo $twitter->request('statuses/user_timeline.json?count=1');
    // Send a request with it
//        $result = json_decode($fb->request('/me'), true);
//        $message = 'Your unique facebook user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
//        echo $message . "<br/>";
    //Var_dump
    //display whole array().
}
// if not ask for permission first
else {
    // get fb authorization
//        $url = $fb->getAuthorizationUri();
    $token = $twitter->requestRequestToken();
    $url = $twitter->getAuthorizationUri(array('oauth_token' => $token->getRequestToken()));

    // return to facebook login url
    return Response::make()->header( 'Location', (string)$url );
}
}));
Route::get('/', array('as' => 'home', 'uses' => 'PagesController@view'));
Route::get('/categories/{slug}', array('as' => 'category', 'uses' => 'ProductController@category'));
Route::get('/categories', 'ProductController@category');
Route::post('/categories', array('as' => 'sort_category', 'uses' => 'ProductController@category'));

Route::get('/products', array('as' => 'products', 'uses' => 'ProductController@index'));
Route::get('/products/{slug}', array('as' => 'showproduct', 'uses' => 'ProductController@show'));

Route::post('/products/add_cart/{id}', array('as' => 'add_cart', 'uses' => 'ProductController@add_cart'));
Route::get('/products/add_cart/{id}', array('as' => 'add_cart_get', 'uses' => 'ProductController@add_cart'));
Route::get('/products/remove_cart/{id}', array('as' => 'remove_cart', 'uses' => 'ProductController@remove_cart'));

Route::get('/shoppingcart', array('as' => 'shoppingcart', 'uses' => 'ProductController@view_cart'));
Route::post('/shoppingcart/update/{id}', array('as' => 'updatecart', 'uses' => 'ProductController@update_cart'));

Route::get('/checkout', array('as' => 'checkout', 'uses' => 'ProductController@checkout'));

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
