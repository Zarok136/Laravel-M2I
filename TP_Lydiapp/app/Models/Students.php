<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $validated)
 */
class Students extends Model
{
    use HasFactory;
    protected $fillable = [
        'lastname',
        'firstname',
        'course',
        'start',
        'end',
    ];
}
