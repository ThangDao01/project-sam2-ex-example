<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use HasFactory;

    public function getCourse(){
        return trim(Course::all()->where('id',$this->CourseId)->pluck('name'), '["]');

//        return 1;
    }
    public function getLesson(){
        return trim(Lesson::all()->where('id',$this->LessonId)->pluck('name'), '["]');
    }
    public function coutDay(){
        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $start = $this->updated_at;
        $hours = $now->diffInHours($start);
        $day = $now->diffInDays($start);
        return $day.'day:'.$hours.'hour';
    }
}
