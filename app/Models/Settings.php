<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable = [
        'logo',
        'app_name1',
        'app_name2',
        'theme',
        'sidebar',
        'copyright',
        'year'
    ];
}
