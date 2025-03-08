<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class SleepRecommendation extends Model
{
    use HasFactory;

    protected $table = 'sleep_recommendations';
    protected $fillable = ['bmi_category', 'recommendation'];
}
