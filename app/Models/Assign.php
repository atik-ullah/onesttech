<?php

namespace App\Models;
use App\Models\Category;
use App\Models\Classes;
use App\Models\Section;
use App\Models\Group;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assign extends Model
{
    use HasFactory;

    public function group(){
        $this->belongsTo(Group::class,'group_id');
    }
    public function class(){
        $this->belongsTo(Classes::class,'class_id');
    }
    public function section(){
        $this->belongsTo(Section::class,'section_id');
    }
    public function category(){
        $this->belongsTo(Category::class,'category_id');
    }
}
