<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\controllers\StudentController;
use App\Models\Student;


Route::get('/login', function () {
    return view('auth.sign_in');
})->name("login");


// STUDENTS

// create students

//Route::get('/students/insert','App\Http\Controllers\StudentController@insertform')->name("student.insertform");
//Route::post('/students/create','App\Http\Controllers\StudentController@insert')->name("student.create");

// OR you can use the convention below for Laravel 8.x
// line below gets the form
Route::get('/students/insert',  [StudentController::class, 'insertform'])->name("student.insertform");
// line below posts the form
Route::post('/students/create',  [StudentController::class, 'insert'])->name("student.create");


// list students
//Route::get('/students/list',  [StudentController::class, 'index'])
//->name("student.list")
//->middleware(['auth']);


Route::middleware(['auth'])->group(function(){
    Route::get('/students/list',  [StudentController::class, 'index'])
    ->name("student.list");     

});

// details of a particular student
Route::post('/student/insert',  [StudentController::class, 'insert'])->name('student.insert');

// edit student
Route::get('/student/edit/{id}',  [StudentController::class, 'edit'])->name("student.edit");

// update student
Route::put('/student/update/{id}',  [StudentController::class, 'update'])->name("student.update");

// delete student
Route::get('/student/delete/{id}',  [StudentController::class, 'destroy'])->name("student.delete");



// TEACHERS
// coming soon...
