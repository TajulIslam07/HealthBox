<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\doctor\DoctorController;


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

Route::view('/','home')->name('index');
Route::view('/all-doctor','doctor')->name('all-doctor');
Auth::routes();

Route::middleware('user')->group(function (){
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/appointment',[\App\Http\Controllers\HomeController::class,'appointment'])->name('appointment');
//Route::get('appointment-data',[\App\Http\Controllers\HomeController::class,'adata'])->name('adata');
Route::get('/my-appointment',[\App\Http\Controllers\HomeController::class,'myappointment'])->name('myappointmemnt');
    Route::post('/', function () {
        Auth::logout();
        return  redirect('/login');
    });
});
Route::middleware('doctorPage')->group(function (){
Route::get('/home', [\App\Http\Controllers\doctor\DoctorController::class, 'index'])->name('home');
Route::get('/doctor-dashboard', [\App\Http\Controllers\doctor\DoctorController::class, 'dashboard'])->name('doctorDashboard');
});



