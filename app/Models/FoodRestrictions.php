<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class FoodRestrictions extends Model
{
    use HasFactory;

    protected $table = 'food_restrictions';
    protected $fillable = ['disease', 'recommendation'];
}
