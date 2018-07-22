<?php

use Illuminate\Http\Request;

Route::group([

    'middleware' => 'api',

], function () {

    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('sendPasswordResetLink', 'ResetPasswordController@sendEmail');
    

});
    
    
    Route::get('promotion/{limit?}', 'Api\TqrcodeController@type_qrcode_promotion');
    Route::get('recomended/{limit?}', 'Api\TqrcodeController@type_qrcode_recomended');
    
    Route::get('social/{limit?}', 'Api\TqrcodeController@type_qrcode_social');  
    Route::get('product/{limit?}', 'Api\TqrcodeController@type_qrcode_product');
    Route::get('business/{limit?}', 'Api\TqrcodeController@type_qrcode_business');
    Route::get('personal/{limit?}', 'Api\TqrcodeController@type_qrcode_personal');


    Route::get('category/{limit?}', 'Api\TqrcodeController@type_qrcode_cate');
    Route::get('all/{limit?}', 'Api\TqrcodeController@indexall');

    

    Route::get('type-qrcode', 'Api\TqrcodeController@type_qrcode_all');
    Route::post('type-qrcode', 'Api\TqrcodeController@postQuote');
    Route::put('type-qrcode/{id}', 'Api\TqrcodeController@putQuote');
    Route::delete('type-qrcode/{id}', 'Api\TqrcodeController@deleteQuote');
   
    /*foreach($categories as $categorie) {
    echo $categorie->label;
      echo '<br>';

        $ligne = json_decode($categorie->structure, true);
        foreach($ligne as $l) {
            echo collect($l)['age'] . '<br>';
        }
    }
    */

    /* start routes api setting qrcode */
    Route::get('setting-qrcode', 'Api\SqrcodeController@setting_qrcode_all');
    Route::post('setting-qrcode', 'Api\SqrcodeController@setting_qrcode');
    Route::put('setting-qrcode/{id}', 'Api\SqrcodeController@setting_qrcode_edit');
    Route::delete('setting-qrcode/{id}', 'Api\SqrcodeController@setting_qrcode_delete');
    Route::get('setting-qrcode/{id}', 'Api\SqrcodeController@setting_qrcode_one');
    /* end routes api setting qrcode */








    


   