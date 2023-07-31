<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'admission_no', 'roll_no', 'first_name',
        'last_name','mobile','email','class_id',
        'section_id','shift_id','b_date','religion',
        'gender','category_id','blood','admission_date',
        'image','parent','status'
    ];

  
}
