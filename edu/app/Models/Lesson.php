<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable=[
        'course_id','name','content','video_url','sort',
    ];
    public function attachment(){
        return $this->hasMany(Models\Attachment::class);
    }
    public function course(){
        return $this->belongsTo(Models\Course::class);
    }
}
