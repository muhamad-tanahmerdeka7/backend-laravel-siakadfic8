<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khs extends Model
{
    use HasFactory;
    //belongsto
    public function student()
    {
        return $this->belongsTo(User::class);
    }
    //belongsto
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
