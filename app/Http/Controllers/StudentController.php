<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    function GetStudent(){
    //   return DB::select("select * from student");

    $student=\App\Models\Student::all();
    return view('student',['s'=>$student]);
       
    }
}
