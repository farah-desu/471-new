<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyTimeLog extends Model
{
    use HasFactory;

    // Define the relationship to the User model (inverse of the hasMany relationship in User)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

