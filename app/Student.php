<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   protected $fillable = ['name', 'lastName', 'gender', 'groupNumb', 'email', 'rate', 'birthday', 'residence'];
}
