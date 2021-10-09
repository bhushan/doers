<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Todo extends Model
{
    use HasFactory;

    protected $casts = [
        'is_completed' => 'boolean'
    ];

    protected $fillable = [
        'body',
        'is_completed'
    ];
}
