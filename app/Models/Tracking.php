<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use HasFactory;

    public function getCourse(){
        return Course::find($this->CourseId)->value('name');
    }
    public function getLesson(){
        return Lesson::find($this->LessonId)->value('name');
    }
    public function coutDay(){
        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $start = $this->updated_at;
        $hours = $now->diffInHours($start);
        $day = $now->diffInDays($start);
        return $day.'day:'.$hours.'hour';
    }
}
