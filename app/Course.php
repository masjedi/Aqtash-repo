<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function video()
    {
        return $this->hasmany(Video::class);
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
