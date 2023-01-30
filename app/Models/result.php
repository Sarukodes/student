<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class result extends Model
{
    use HasFactory;
    public function student(){
        return $this->belongsTo(student::class,'student_id','id');
    }
    public function subject(){
        return $this->belongsTo(sub::class,'subject_id','id');
    }
}
