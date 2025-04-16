<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DoctorController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'checkLogin'])->name('login.check');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('patients', [PatientController::class, 'index'])->name('patients.index');
Route::get('patients/create', [PatientController::class, 'create'])->name('patients.create');
Route::post('patients', [PatientController::class, 'store'])->name('patients.store');
Route::get('patients/{id}/edit', [PatientController::class, 'edit'])->name('patients.edit');
Route::put('patients/{id}', [PatientController::class, 'update'])->name('patients.update');
Route::delete('patients/{id}', [PatientController::class, 'destroy'])->name('patients.destroy');

Route::get('appointments', [EmployeeController::class, 'index'])->name('appointments.index');
Route::patch('appointments/{appointment}/approve', [EmployeeController::class, 'approve'])->name('appointments.approve');
Route::delete('appointments/{appointment}/reject', [EmployeeController::class, 'reject'])->name('appointments.reject');

Route::get('approved-appointments', [DoctorController::class, 'index'])->name('approved.index');