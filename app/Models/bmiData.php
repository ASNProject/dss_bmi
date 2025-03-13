<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class bmiData extends Model
{
    use HasFactory;

    protected $table = 'bmi_data';

    // Add user_id to fillable
    protected $fillable = [
        'user_id',
        'user_name',
        'height',
        'weight',
        'age',
        'gender',
        'bmi_category',
        'bmi',
        'range_category',
        'disease_histories',
        'disease',
        'eating_habits',
        'sleep_patterns',
        'eat_recommendation',
        'sleep_recommendation',
        'physical_activity',
        'calorie',
        'food_restriction',
        'activity_pattern',
        'eat_pattern',
    ];
}
