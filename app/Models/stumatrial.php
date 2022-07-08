<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stumatrial extends Model
{
    use HasFactory;
    protected $table='student_material';
    protected $fillable =['StudentSsn','MaterialId','Score'];
}
