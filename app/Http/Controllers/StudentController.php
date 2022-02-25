<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Student;


class StudentController extends Controller
{
    public function index()
    {
        $students = Student::get(); // getting all students
        return view("students.list")->with(compact("students"));
    }

    public function insertform(){
        return view('students.register');
    }

    public function insert(Request $request)
    {
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

        // $isInserted = Student::create($student_details);
        // if($isInserted){
        //    return back()->with('success', "Student recorded successfully");
        // }else{
        //    return back()->with('error', "Unable to insert student details");

        // }


        // Approach 2

        $student = new Student();

        $student->first_name = $f_name;
        $student->last_name = $l_name;
        $student->date_of_birth = $dob;
        $student->class = $class;
        $student->parent_name = $parent_name;
        $student->home_address = $home_address;

        $isInserted = $student->save();

        if ($isInserted) {
            return back()->with('success', "Student details have been recorded successfully");
        } else {
            return back()->with('error', "Unable to record student details");

        }


    }

    public function edit(Request $request, $id)
    {
        $student = Student::find($id);
//        dd($student);
        // compact() helps pass the details of student chosen to the blade file
        return view("students.edit")->with(compact("student"));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            "firstName" => 'required',
            "lastName" => 'required',
            "dob" => 'required',
            "class" => 'required',
            "parentName" => 'required',
            "homeAddress" => 'required',
        ]);

        $first_name = $request->input("firstName");
        $last_name = $request->input("lastName");
        $date_of_birth = $request->input("dob");
        $class = $request->input("class");
        $parent_name = $request->input("parentName");
        $home_address = $request->input("homeAddress");

//        $student = Student::find($id);
//        $student->first_name = $first_name;
//        $student->last_name = $last_name;
//        $student->date_of_birth = $date_of_birth;
//        $student->class = $class;
//        $student->parent_name = $parent_name;
//        $student->home_address = $home_address;
//        $isUpdated = $student->save();

        $student_details = [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'date_of_birth' => $date_of_birth,
            'class' => $class,
            'parent_name' => $parent_name,
            'home_address' => $home_address,
        ];

        $isUpdated = Student::where("id", "=", $id)->update($student_details);

        if ($isUpdated) {
            return back()->with('success', "Student details have been updated successfully");
        } else {
            return back()->with('error', "Unable to update student details");
        }
    }

    public function destroy(Request $request, $id){
        if ($id) {
            $student = Student::find($id);
            $student_name = $student->first_name." ".$student->last_name;

            $isDeleted = $student->delete();

            if ($isDeleted) {
                return back()->with('success', "Student " ." $student_name "." has been deleted successfully");
            } else {
                return back()->with('error', "Unable to delete student");
            }
        } else {
            return back()->with('error', "Unable to find student id");
        }
    }
}
