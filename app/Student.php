<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
  use SoftDeletes;

    protected $fillable = [
        'student_name',
          'email',
          'student_roll',
          'student_address'
    ];


  protected $dates = ['deleted_at'];


}
