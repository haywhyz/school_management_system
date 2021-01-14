<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard'); 
    // student
    Route::get('/student/create', [App\Http\Controllers\StudentController::class, 'index'])->name('student.create');
    Route::post('/student/store', [App\Http\Controllers\StudentController::class, 'store'])->name('student.store'); 
    Route::post('/student/{id}', [App\Http\Controllers\StudentController::class, 'show'])->name('student.show'); 
    Route::get('/student/{id}/edit', [App\Http\Controllers\StudentController::class, 'edit'])->name('student.edit'); 
    Route::post('/student/update', [App\Http\Controllers\StudentController::class, 'update'])->name('student.update'); 
    Route::post('/student/{id}', [App\Http\Controllers\StudentController::class, 'delete'])->name('student.delete'); 
    // employee
    Route::get('/employee/create', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employee.create');
    Route::post('/employee/store', [App\Http\Controllers\EmployeeController::class, 'store'])->name('employee.store'); 
    Route::post('/employee/{id}', [App\Http\Controllers\EmployeeController::class, 'show'])->name('employee.show'); 
    Route::get('/employee/{id}/edit', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('employee.edit'); 
    Route::post('/employee/update', [App\Http\Controllers\EmployeeController::class, 'update'])->name('employee.update'); 
    Route::post('/employee/{id}', [App\Http\Controllers\EmployeeController::class, 'delete'])->name('employee.delete');  
      
     Route::resource('school', App\Http\Controllers\SchoolController::class);
     Route::resource('session', App\Http\Controllers\SessionController::class);
     Route::resource('classroom', App\Http\Controllers\ClassroomController::class);
     Route::resource('subject', App\Http\Controllers\SubjectController::class);
      
     
});