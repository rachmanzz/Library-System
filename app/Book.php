<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillabled = ['author','title','genre','year','edition','stock'];
}
