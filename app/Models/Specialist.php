<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Specialist extends Model
{
    use HasFactory;
    protected $table= 'specialist';
    protected $fillable= ['fullName', 'username','password','phone', 'roleId'];
}
