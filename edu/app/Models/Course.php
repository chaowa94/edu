<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable=[
        'name','brief','content','sort',
    ];
    //
    public function sliders(){
        return $this->hasMany(Models\Slider::class);
    }
    public function lesson(){
        return $this->hasMany(Models\Lesson::class);
    }
}
