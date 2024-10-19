<?php

use App\Http\Controllers\Api\EducationController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::resource('/students', StudentController::class)
    ->middleware('auth:sanctum');

Route::resource('/educations', EducationController::class)
    ->middleware('auth:sanctum');

Route::resource('/projects', ProjectController::class)
    ->middleware('auth:sanctum');
