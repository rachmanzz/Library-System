<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book_student extends Model
{
   protected $table = 'borrowing_records';

   protected $fillable = ['student_id','book_id','borrowing_date','status','created_at','upated_at'];

   public function records()
   {
   		return $this->hasManyThrough('App\Student','App\Book');
   }
}
