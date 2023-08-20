<?php

use Illuminate\Support\Facades\Route;

// Import PatientController
use App\Http\Controllers\PatientController;

// Import PatientController
use App\Http\Controllers\DoctorController;

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
Route::resource('patients', PatientController::class)->except(['update', 'destroy', 'create', 'show', 'edit']);

// DoctorController Route
Route::resource('doctors', DoctorController::class)->except(['store', 'update', 'destroy', 'create', 'show', 'edit']);
