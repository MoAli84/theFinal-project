<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sublevel extends Model
{
    use HasFactory;

    protected $table = 'sublevel';
    protected $fillable =['SubLevelName','LevelId'];
}
