<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\deshbordController;
use  App\Http\Controllers\CategoriesController;
use  App\Http\Controllers\DivisionController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\UpazilaController;

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


Route::middleware(['auth', 'verified'])->group(function (){
    Route::get('/',[deshbordController::class, 'index'])->name('dashboard');
    Route::resource('/categories', CategoriesController::class);
    Route::resource('/divisions',DivisionController::class);
    Route::post('/divisions-enable-disable/{id}',[DivisionController::class,'enableDisable'])->name('divisions-enable-disable');
    Route::resource('/districts', DistrictController::class);
    Route::post('/district-enable-disable/{id}',[DistrictController::class, 'enable_disable'])->name('district-enable-disable');
    Route::resource('/upazila', UpazilaController::class);
    Route::post('/upazilas_ed/{id}',[UpazilaController::class, 'upazila_ed'])->name('upazila_ed');
});


require __DIR__.'/auth.php';
