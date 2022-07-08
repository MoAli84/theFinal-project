<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StdMaterial extends Model
{
    use HasFactory;
    protected $table = 'student_material';
    protected $fillable = ['StudentSsn', 'MaterialId','Score'];
    public $timestamps=false;
}
