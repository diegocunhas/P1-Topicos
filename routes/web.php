<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ClassroomController;

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

//Route::get('/',[ClassroomController::class,'index']);

//Route::post('/classroom',[ClassroomController::class,'store']);

//Route::get('/classroom/create',[ClassroomController::class,'create']);

//Route::get('classroom/{classroom}',[ClassroomController::class,'show']);

//Route::put('/classroom/{classroom->id}',[ClassroomController::class,'update']);

//Route::delete('/classroom/{classroom->id}',[ClassroomController::class,'destroy']);

//Route::get('/classroom/{classroom->id}/edit',[ClassroomController::class,'edit']);

Route::resource('classroom',ClassroomController::class);