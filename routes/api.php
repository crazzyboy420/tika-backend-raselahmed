<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\varificationController;
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
Route::get('/test', function(){
      return 'Change data in my coumputer';
});

Route::post('/varify',[varificationController::class,'varify']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
