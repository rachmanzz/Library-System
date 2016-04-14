<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
	protected $fillable = ['password','created_at','updated_at'];

	public function borrowed()
	{
		return $this->belongsToMany('App\book_student');
	}
}