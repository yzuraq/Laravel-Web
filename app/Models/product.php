<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected$fillable = [
        'image',
        'title',
        'description',
        'price',
        'stock',
    ];
}
