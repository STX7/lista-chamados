<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    /** @use HasFactory<\Database\Factories\CallFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'number',
        'address',
        'properties',
        'problem',
        'comment',
        'department',
        'description',
        'status',

    ];

}
