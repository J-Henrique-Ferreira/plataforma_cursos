<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(Courses::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lessons::class);
    }
}
