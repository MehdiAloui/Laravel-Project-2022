<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\ExamsController;
use App\Http\Controllers\LocaleController;
use App\Models\exams;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
 * Global Routes
 *
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages
Route::get('lang/{lang}', [LocaleController::class, 'change'])->name('locale.change');

/*
 * Frontend Routes
 */
Route::group(['as' => 'frontend.'], function () {
    includeRouteFiles(__DIR__.'/frontend/');
});

/*
 * Backend Routes
 *
 * These routes can only be accessed by users with type `admin`
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    includeRouteFiles(__DIR__.'/backend/');
});
//exams_router
//Route::get('dashboard',[ExamsController::class,'index']);
Route::post('/',[ExamsController::class,'addfile'])->name('addfile');
Route::get('edit_exam/{id}',[ExamsController::class,'edit'])->name('edit');
Route::put('update-exam/{id}',[ExamsController::class,'update']);
Route::get('delete_exam/{id}',[ExamsController::class,'destroy']);
//Route::get('/af',[ExamsController::class,'retourner'])->name('return');

//Route::post('/m',[ExamsController::class,'afficher'])->name('afficher');
//Route::get('dashboard',[ExamsController::class,'addfile'])->name('upload');



