<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class AddController extends Controller
{
   public function add(){
       return view ('add-form');
   }
   public function store(Request $request){
      dump($request->all());

   }
}
