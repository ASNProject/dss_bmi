<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class EatPattern extends Model
{
    use HasFactory;

    protected $table = 'eat_patterns';
    protected $fillable = ['bmi_category', 'recommendation'];
}
