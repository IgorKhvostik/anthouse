<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class IndexController extends Controller
{
    public function index(){
        $students=Student::orderBy('rate','desc')->paginate(5);
      return  view('students')->with('students', $students);
    }

}
