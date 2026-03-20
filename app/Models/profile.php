<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'full_name',
        'image_path',
        'bio',
        'linkedin',
        'github',
        'gmail',
    ];
}
