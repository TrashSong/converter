<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rate extends Model
{
    //
    protected $table = 'rates';

    // added fillable fields
    protected $fillable = [
        'name',
        'value',
    ];
}
