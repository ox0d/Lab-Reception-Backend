<?php

use Illuminate\Support\Facades\Route;

// Import PatientController
use App\Http\Controllers\PatientController;

// Import PatientController
use App\Http\Controllers\DoctorController;

// Import TestCategoryController
use App\Http\Controllers\TestCategoryController;

// Import TestController
use App\Http\Controllers\TestController;

// Import BarcodeGenerationController 
use App\Http\Controllers\BarcodeGenerationController;

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

Route::get('/', function () {
    return view('welcome');
});

// PatientController Route
Route::resource('patients', PatientController::class)->except(['update', 'destroy', 'create', 'show', 'edit', 'store']);
Route::post('/patients', [PatientController::class, 'store'])->name('patients.store')->withoutMiddleware('web');


// DoctorController Route
Route::resource('doctors', DoctorController::class)->except(['store', 'update', 'destroy', 'create', 'show', 'edit']);

// TestCategoryController Route
Route::get('/test-categories' , [TestCategoryController::class, 'index'])->name('categories.index');

// TestController Route
Route::get('/tests' , [TestController::class, 'index'])->name('tests.index');

// BarcodeGenerationController Route
Route::post('/barcode-generation', [BarcodeGenerationController::class, 'store'])->name('barcodes.store')->withoutMiddleware('web');