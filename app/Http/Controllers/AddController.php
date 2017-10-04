<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Cookie\CookieJar;
class AddController extends Controller
{
   public function add(){
       return view ('add-form');
   }
   public function store(Request $request){
      $this->validate($request, [
          'name'=>'required|max:15',
          'lastName'=>'required|max:15',
          'gender'=>'required',
          'groupNumb'=>'required|max:5',
          'email'=>'required|max:30|unique:students',
          'rate'=>'required|max:5',
          'birthday'=>'required',
          'residence'=>'required',
      ]);
        $data=$request->all();
       $student=new Student();
       $student->fill($data);
       $student->save();
       $cookie=cookie('email', $request['email'],1000);
       /*return redirect('add')->with(cookie($cookie));*/
       return response('Hello World')->cookie($cookie);
       

   }
}
