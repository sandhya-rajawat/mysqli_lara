<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ApiDemo;
use App\Http\Controllers\QueryController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('users',[UserController::class,'users']);
Route::get('students',[StudentController::class,'GetStudent']);


// HTTP API IN LARAVEL.........
Route::get('apiDemo',[ApiDemo::class,'GetApi']);
// query are run all ........................
Route::get('query',[QueryController::class,'query']);
