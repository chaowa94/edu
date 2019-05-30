<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable=[
        'course_id','img_url','sort',
    ];
    public function course(){
        return $this->belongsTo(Models\Course::class);
    }
}
