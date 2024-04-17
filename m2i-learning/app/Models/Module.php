<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static create(array $validated)
 * @method static findOrFail(string $id)
 */
class Module extends Model
{
    use HasFactory;

    protected $table = 'modules';
    protected $fillable = ['name', 'start', 'end'];
}
