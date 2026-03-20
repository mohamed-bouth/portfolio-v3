<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class education extends Model
{
    protected $filable = [
        'institution',
        'logo_path',
        'degree',
        'start_year',
        'end_year',
        'description',
    ];
}
