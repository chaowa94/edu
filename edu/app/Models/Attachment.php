<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $fillable=[
        'lesson_id','url',
    ];
    public function lesson(){
        return $this->belongsTo(Models\Lesson::class);
    }
}
