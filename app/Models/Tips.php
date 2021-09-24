<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tips extends Model
{
    use HasFactory;
    protected $table = 'tips';
    protected $fillable = [
        'model',
        'brand',
        'type',
        'version',
        'content',
        'creator_id',
    ];
}
