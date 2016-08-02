<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guitar extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'make', 'model',
    ];

    protected $table = 'guitars';
}
