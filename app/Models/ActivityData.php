<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ActivityData extends Model
{
    use HasFactory;

    protected $table = 'activity_data';
    protected $fillable = ['bmi_category', 'recommendation'];

}
