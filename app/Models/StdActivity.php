<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StdActivity extends Model
{
    use HasFactory;
    protected $table = 'student_activity';
    protected $fillable = ['StudentSsn', 'ActivityId','Score'];
    public $timestamps=false;
}
