<?php

use App\Http\Controllers\Api\EducationController;
use App\Http\Controllers\Api\ExperienceController;
use App\Http\Controllers\Api\LanguageController;
use App\Http\Controllers\Api\LanguageStudentController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\SkillController;
use App\Http\Controllers\Api\SkillStudentController;
use App\Http\Controllers\Api\SocialNetworkController;
use App\Http\Controllers\Api\SocialNetworkStudentController;
use App\Http\Controllers\Api\StudentController;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::resource('/students', StudentController::class)
    ->middleware('auth:sanctum');

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

Route::resource('/skills', SkillController::class)
    ->middleware('auth:sanctum');

Route::post('/skills/{student}/skills/attach', [SkillStudentController::class, 'attachSkill'])
    ->middleware('auth:sanctum');
Route::delete('/skills/{student}/skills/detach', [SkillStudentController::class, 'detachSkill'])
    ->middleware('auth:sanctum');

Route::resource('/socialNetworks', SocialNetworkController::class)
    ->middleware('auth:sanctum');

Route::post('/socialNetworks/{student}/socialNetworks/attach', [SocialNetworkStudentController::class, 'attachSocialNetwork'])
    ->middleware('auth:sanctum');
Route::delete('/socialNetworks/{student}/socialNetworks/detach', [SocialNetworkStudentController::class, 'detachSocialNetwork'])
    ->middleware('auth:sanctum');
