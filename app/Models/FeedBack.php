<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    use HasFactory;

    public function getName(){
        $account = Account::find($this->id);
        return $account->LastName;
    }
}
