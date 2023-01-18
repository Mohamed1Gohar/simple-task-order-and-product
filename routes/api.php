<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Auth\PassportAuthController;

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

//    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//        return $request->user();
//    });

Route::group(['prefix' => 'v1', 'namespace' => 'V1'], function () {

    Route::post('login', [PassportAuthController::class, 'login']);
    Route::post('register', [PassportAuthController::class, 'register']);

    Route::middleware('auth:api')->group(function () {

        Route::get('get-user', [PassportAuthController::class, 'userInfo']);

        Route::apiResource('products' , 'ProductController')->only(['index' , 'show']);
        Route::apiResource('orders' , 'OrderController');
    });

});
