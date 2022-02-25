<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\StudentsDetail;

class StudentsDetailController extends Controller
{
    //
       public function insertform(){
        return view('studentsDetail');
        }

   


        public function insert(Request $request){

            // method used to validate student details
        $this->validate($request, [
            "firstName" => 'required',
            "lastName" => 'required',
            "dob" => 'required',
            "class" => 'required',
            "parentName" => 'required',
            "homeAddress" => 'required',
        ]);
          
        $f_name = $request->input('firstName');
        $l_name = $request->input('lastName');
        $dob = $request->input('dob');
        $class = $request->input('class');
        $parent_name = $request->input('parentName');
        $home_address = $request->input('homeAddress');

       // Approach 1
     
    //    $student_details = [
    //     "first_name" => $f_name,
    //     "last_name" => $l_name,
    //     "date_of_birth" => $dob,
    //     "class" => $class,
    //     "parent_name" => $parent_name,
    //     "home_address" => $home_address,
    //   ];

    // $isInserted = StudentsDetail::create($student_details);
    // if($isInserted){
    //    return back()->with('success', "Student recorded successfully");
    // }else{
    //    return back()->with('error', "Unable to insert student details");
        
    // }



       // Approach 2 

       $student = new StudentsDetail();

       $student->first_name = $f_name;
       $student->last_name = $l_name;
       $student->date_of_birth = $dob;
       $student->class = $class;
       $student->parent_name = $parent_name;
       $student->home_address = $home_address;
       $isInserted = $student->save();
       if($isInserted){
        return back()->with('success', "Student details have been recorded successfully");
      }else{
        return back()->with('error', "Unable to record student details");
         
      }







        }
        }