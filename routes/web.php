<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\doctor\DoctorController;
use App\Http\Controllers\HomeController;


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

Route::view('/','user')->name('index');
Route::view('/all-doctor','doctor')->name('all-doctor');
Auth::routes();
Route::post('/', function () {
    Auth::logout();
    return  redirect('/login');
});

Route::middleware('userPage')->group(function (){
Route::get('/home', [\App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/appointment',[\App\Http\Controllers\HomeController::class,'appointment'])->name('appointment');
//Route::get('appointment-data',[\App\Http\Controllers\HomeController::class,'adata'])->name('adata');
Route::get('/my-appointment',[\App\Http\Controllers\HomeController::class,'myappointment'])->name('myappointmemnt');

});
Route::middleware('doctorPage')->group(function (){
Route::get('/home', [\App\Http\Controllers\doctor\DoctorController::class, 'index'])->name('home');
Route::get('/doctor-dashboard', [\App\Http\Controllers\doctor\DoctorController::class, 'dashboard'])->name('doctorDashboard');
Route::get('/details-prescription', [\App\Http\Controllers\doctor\DoctorController::class, 'detailsPrescription'])->name('detailsPrescription');
Route::get('/all-patient', [\App\Http\Controllers\doctor\DoctorController::class, 'allPatient'])->name('allPatient');
});



