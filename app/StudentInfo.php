<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
	protected $table = 'studentinfo';
   protected $fillable = ['name','age','sex'];
}
