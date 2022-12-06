<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\employeeController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('product/list',[productController::class,'Apilist']);
Route::post('product/create',[productController::class,'createProduct']);

Route::get('employee/list',[employeeController::class,'Apilist']);
Route::post('employee/create',[employeeController::class,'createEmployee']);
Route::post('employee/update',[employeeController::class,'updateEmployee']);