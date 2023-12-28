<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AppointmentController;


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

Route::get('/',[IndexController::class,'index'])->name('index');
Route::get('/all-doctor',[IndexController::class,'allDoctor'])->name('all-doctor');
Auth::routes();
Route::post('/', function () {
Auth::logout();
return  redirect('/login');
});


Route::middleware(['auth','userPage'])->group(function (){
Route::get('/user-home', [\App\Http\Controllers\User\HomeController::class,'index'])->name('userHome');
Route::get('/appointment',[\App\Http\Controllers\User\HomeController::class,'appointment'])->name('appointment');
Route::post('/appointment-data',[AppointmentController::class,'store'])->name('appointment-data');
Route::get('/my-appointment',[AppointmentController::class,'index'])->name('myappointmemnt');

});
Route::middleware(['auth','doctorPage'])->group(function (){
Route::get('/home', [\App\Http\Controllers\doctor\DoctorController::class, 'index'])->name('home');
Route::get('/doctor-dashboard', [\App\Http\Controllers\doctor\DoctorController::class, 'dashboard'])->name('doctorDashboard');
Route::get('/all-patient', [\App\Http\Controllers\doctor\DoctorController::class, 'allPatient'])->name('allPatient');
Route::get('/all-doctors', [\App\Http\Controllers\doctor\DoctorController::class, 'allDoctors'])->name('allDoctors');
Route::get('/edit-doctors', [\App\Http\Controllers\doctor\DoctorController::class, 'editDoctors'])->name('editDoctors');
Route::post('/edit-doctors', [\App\Http\Controllers\doctor\DoctorController::class, 'editDoctorsUpload'])->name('editDoctorsUpload');
Route::get('/report-details/{id}',[\App\Http\Controllers\doctor\DoctorController::class,'details']);
Route::post('/report-upload/{id}',[\App\Http\Controllers\doctor\DoctorController::class,'reportUpload'])->name('prescriptionUpload');
});

