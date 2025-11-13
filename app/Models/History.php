<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    // added fillable fields
    protected $fillable = [
        'action',
        'date',
    ];
}
