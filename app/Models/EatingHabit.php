<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class EatingHabit extends Model
{
    use HasFactory;

    protected $table = 'eating_habits';
    protected $fillable = ['eating_habit'];
}
