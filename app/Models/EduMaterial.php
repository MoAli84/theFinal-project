<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EduMaterial extends Model
{
    use HasFactory;
    protected $table = 'edumaterial';
    protected $fillable = ['EduLevelId', 'LevelId', 'TermId','MaterialId'];
    public $timestamps =false;

}
