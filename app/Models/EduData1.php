<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EduData1 extends Model
{
    use HasFactory;
    protected $table = 'education_data';
    protected $fillable = ['AcdYearId','LevelId','TermId' ,'StudentSsn','created_at' , 'updated_at'];//, 'eduId'
    // public $timestamps = 'false';
}
