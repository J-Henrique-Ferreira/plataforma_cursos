<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    public function modules()
    {
        return $this->hasMany(Modules::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollments::class);
    }

    public function students()
    {
        return $this->belongsToMany(User::class, 'enrollments');
    }
}
