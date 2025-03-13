<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ActivityPattern extends Model
{
    use HasFactory;

    protected $table = 'activity_patterns';
    protected $fillable = ['disease', 'activity'];
}
