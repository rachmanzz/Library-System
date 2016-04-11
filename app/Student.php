<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
	protected $guard = "students";
	protected $fillable = ['id','password','created_at','updated_at'];
}