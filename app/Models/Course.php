<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function coutLearning(){
        return Tracking::all()->where('CourseId',$this->id)->count();
    }
}
