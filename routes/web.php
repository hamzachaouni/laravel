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
use App\Category;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category', function(){
   
    $categories = Category::where('id', 2)->get();
    
    return view('tqrcode.cat',['tqrcodes' => $categories]);


   
    /*foreach($categories as $categorie) {
    echo $categorie->label;
      echo '<br>';

        $ligne = json_decode($categorie->structure, true);
        foreach($ligne as $l) {
            echo collect($l)['age'] . '<br>';
        }
    }
    */

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

////////////////////////////



Route::group(['prefix'=>'admin'], function() {

    // Login Routes...
    Route::get('login', ['as' => 'admin.login', 'uses' => 'AdminAuth\LoginController@showLoginForm']);
    Route::post('login', ['uses' => 'AdminAuth\LoginController@login']);
    Route::post('logout', ['as' => 'admin.logout', 'uses' => 'AdminAuth\LoginController@logout']);

// Registration Routes...
    Route::get('register', ['as' => 'admin.register', 'uses' => 'AdminAuth\RegisterController@showRegistrationForm']);
    Route::post('register', ['uses' => 'AdminAuth\RegisterController@register']);

// Password Reset Routes...
    Route::get('password/reset', ['as' => 'admin.password.reset', 'uses' => 'AdminAuth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('password/email', ['as' => 'admin.password.email', 'uses' => 'AdminAuth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset/{token}', ['as' => 'admin.password.reset.token', 'uses' => 'AdminAuth\ResetPasswordController@showResetForm']);
    Route::post('password/reset', ['uses' => 'AdminAuth\ResetPasswordController@reset']);
});

    Route::view('/admin/home','admin-home')->middleware('admin');

    // route Tyqrcode
    Route::get('/admin/type-qrcode', 'TqrcodeController@index');
    Route::get('/admin/type-qrcode/create', 'TqrcodeController@create');
    Route::post('/admin/type-qrcode', 'TqrcodeController@store');
    Route::get('/admin/type-qrcode/{id}/edit', 'TqrcodeController@edit');
    Route::put('/admin/type-qrcode/{id}', 'TqrcodeController@update');
    Route::delete('/admin/type-qrcode/{id}', 'TqrcodeController@destory');
    // end Tyqrcode



    // route Tyqrcode
    Route::get('/type-qrcode', 'TestController@index');
    Route::get('/type-qrcode/create', 'TestController@create');
    Route::post('/type-qrcode', 'TestController@store');
    Route::get('/type-qrcode/{id}/edit', 'TestController@edit');
    Route::put('/type-qrcode/{id}', 'TestController@update');
    Route::delete('/type-qrcode/{id}', 'TestController@destory');
    // end Tyqrcode

    Route::get('/type-qrcode/{id}', 'TestController@indexid');
    Route::get('/all', 'TestController@indexall');

