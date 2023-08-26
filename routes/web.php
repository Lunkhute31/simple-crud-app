<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[TaskController::class,'index']);
Route::get('/create',[TaskController::class,'create']);
Route::post('task/store',[TaskController::class,'store']);
Route::get('task/{id}/edit',[TaskController::class,'edit']);
Route::put('task/{id}/update',[TaskController::class,'update']);
Route::delete('task/{id}/delete',[TaskController::class,'delete']);
