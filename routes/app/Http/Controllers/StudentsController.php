<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;



class StudentsController extends Controller
{
        public function index (){
        $teachers = Teacher::where('first_name', 'like', '%a%')->get();
            return view('teachers.registration', ['animals' => $teachers]);
        }
    
        //public function create (){
           // return view('teachers.registration');
        //}
    }
    
