<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gov extends Model
{
    use HasFactory;
    protected $table = 'governorate';
    protected $fillable = ['GovName','created_at' , 'updated_at'];
}
