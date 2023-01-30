<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ResultController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. Thesepp
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('student/add',[StudentController::class,'add']);
Route::post('student/save',[StudentController::class,'save']);
Route::get('student/list',[StudentController::class,'list']);

Route::get('subject/add',[SubjectController::class,'add']);
Route::post('subject/save',[SubjectController::class,'save']);
Route::get('subject/list',[SubjectController::class,'list']);

Route::get('result/add',[ResultController::class,'add']);
Route::post('result/save',[ResultController::class,'save']);
Route::get('result/list',[ResultController::class,'list']);

