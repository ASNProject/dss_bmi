<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class SleepPattern extends Model
{
    use HasFactory;

    protected $table = 'sleep_patterns';
    protected $fillable = ['sleep_pattern'];
}
