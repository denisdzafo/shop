<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1')->group(function () {
    Route::prefix('admin')->group(function () { 
            Route::post('user/add', 'Admin\ManagerController@addManager');
            Route::get('user/get', 'Admin\ManagerController@getAllManagers');
            Route::delete('manager/delete/{id}', 'Admin\ManagerController@deleteManger');

            Route::post('aplication/data', 'Admin\AplicationController@addData');
            Route::post('contact/info', 'Admin\AplicationController@contactInfo');

        Route::middleware('auth:api')->group(function () {



        });
    });

     Route::prefix('manager')->group(function () { 
        Route::prefix('product')->group(function () { 
            Route::post('add', 'Manager\ProductController@addProduct');
            Route::put('update/{id}', 'Manager\ProductController@updateProduct');
            Route::post('category', 'Manager\ProductController@addProductCategory');
            Route::put('category/{id}', 'Manager\ProductController@updateProductCategory');
        });
            
        Route::post('tags/add', 'Manager\ProductController@addTags');
        Route::post('tags/delete', 'Manager\ProductController@deleteTags');
        Route::get('order/confirm/{id}', 'Customer\OrderController@confirmOrder');
            Route::middleware('auth:api')->group(function () {
                


            });
        });

     Route::prefix('customer')->group(function () { 
            Route::post('order/add', 'Customer\OrderController@addOrder');
        Route::middleware('auth:api')->group(function () {



        });
    });
    Route::prefix('auth')->group(function () {
        // Create New User
        Route::post('register', 'AuthController@register');
        // Login User
        Route::post('login', 'AuthController@login');
        
        // Refresh the JWT Token
        Route::get('refresh', 'AuthController@refresh');
        
        Route::middleware('auth:api')->group(function () {
            // Get user info
            Route::get('user', 'AuthController@user');
            // Logout user from application
            Route::post('logout', 'AuthController@logout');
        });
    });
});