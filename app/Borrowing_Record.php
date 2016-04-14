<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrowing_Record extends Model
{
    protected $table = "borrowing_records";
    protected $dates = ['borrowing_date'];
    protected $fillable = ['book_id','student_id','borrowing_date','status','created_at','updated_at'];

    public function studentBooks()
    {
    	return $this->belongsToMany('App\Student');
    }

}

