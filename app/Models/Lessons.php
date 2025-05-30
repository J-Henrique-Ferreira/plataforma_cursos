<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    use HasFactory;

    public function module()
    {
        return $this->belongsTo(Modules::class);
    }

    public function views()
    {
        return $this->hasMany(LessonViews::class);
    }
}
