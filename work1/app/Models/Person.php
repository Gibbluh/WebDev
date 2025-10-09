<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'people';
    public $timestamps = false;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
    ];
}


