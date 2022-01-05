<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassesController;
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
//登入
Route::post('register', [AuthController::class, 'register']);

Route::post('login',  [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    // 查詢所有班級
    Route::get('Classes',[ClassesController::class,'api_Classes']);
    // 修改指定班級
    Route::patch('Classes',[ClassesController::class,'api_updpte']);
    // 刪除指定班級
    Route::delete('Classes',[ClassesController::class,'api_delete']);
    // 查詢所有學生
    Route::get('Students',[StudentsController::class,'api_Students']);
    // 修改指定學生
    Route::patch('Students',[StudentsController::class,'api_updpte']);
    // 刪除指定學生
    Route::delete('Students',[StudentsController::class,'api_delete']);
});
