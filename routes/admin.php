<?php

use App\Http\Controllers\EducationsController;
use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WoeksController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {

    Route::resource('/admin/owner' , OwnerController::class);
    Route::resource('/admin/expertises' , ExpertiseController::class);
    Route::resource('/admin/skills' , SkillsController::class);
    Route::resource('/admin/educations' , EducationsController::class);
    Route::resource('/admin/projects' , ProjectsController::class);
    Route::resource('/admin/works' , WoeksController::class);
    Route::resource('/admin/users',UserController::class);

});