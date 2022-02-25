<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeachersController extends Controller
{
    public function index (){
        
    $teachers = Teacher::all();
    // $teachers = Teacher::where('first_name', 'like', '%e%')->get();
    // dd($teachers);
        return view('teachers.registration', ['animals' => $teachers]);   
    }
}
