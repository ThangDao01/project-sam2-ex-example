<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    public function thumbnail()
    {
        $data = DataSupport::find($this->dataSupportId);
        return $data->images;
    }
}
