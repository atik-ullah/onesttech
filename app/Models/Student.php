<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classes;
use App\Models\Section;
use App\Models\Guardian;
use Illuminate\Database\Eloquent\Casts\Attribute;

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

<<<<<<< HEAD
   
    public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function shift()
    {
        return $this->belongsTo(Shift::class, 'shift_id');
    }



    public function getStatusAttribute($value)
    {
        if ($value == 0) {
            return "Inactive";
        } else {
            return "Active";
        }
    }
  
=======
>>>>>>> 610d78a7b468cfaafc476083759a9dbf94d785f6
}
