<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudents(){

        $students = DB::table('students')
        ->join('cities', 'students.city_id', '=', 'cities.id')
        ->select('students.*','cities.city_name')
        ->paginate(10);
        // return $students;
        return view('allStudents',compact('students'));
    }
}
