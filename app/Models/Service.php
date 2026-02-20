<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'description',
        'features',
        'image_path',
        'position'
    ];

    protected $casts = [
        'features' => 'array',
    ];
}
