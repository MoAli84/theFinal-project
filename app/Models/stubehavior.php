<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stubehavior extends Model
{
    use HasFactory;
    protected $table='student_behavior';
    protected $fillable =['educationDataId','behavorId','description'];
}
