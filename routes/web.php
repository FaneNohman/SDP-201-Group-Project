<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[LoginController::class,'log'])->name('login');
Route::post('/',[LoginController::class,'login']);

Route::group(['middleware' => ['auth','admin']], function() {

});

Route::group(['middleware' => ['auth','manager']], function() {
    
});

Route::group(['middleware' => ['auth','user']], function() {
    Route::get('/userStat',[TaskController::class,'userStat']);
    Route::get('/main',[TaskController::class,'main'])->name('main');
    Route::get('/logout',[LoginController::class,'logout']);
});