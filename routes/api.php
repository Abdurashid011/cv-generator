<?php

use App\Http\Controllers\Api\EducationController;
use App\Http\Controllers\Api\ExperienceController;
use App\Http\Controllers\Api\LanguageController;
use App\Http\Controllers\Api\LanguageStudentController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\StudentController;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::resource('/students', StudentController::class);
//    ->middleware('auth:sanctum');

Route::post('/students/{student}/languages/attach', [LanguageStudentController::class, 'attachLanguage'])
    ->middleware('auth:sanctum');
Route::delete('/students/{student}/languages/detach', [LanguageStudentController::class, 'detachLanguage'])
    ->middleware('auth:sanctum');

Route::resource('/educations', EducationController::class)
    ->middleware('auth:sanctum');

Route::resource('/projects', ProjectController::class)
    ->middleware('auth:sanctum');

Route::resource('/experiences', ExperienceController::class)
    ->middleware('auth:sanctum');

Route::resource('/languages', LanguageController::class)
    ->middleware('auth:sanctum');
