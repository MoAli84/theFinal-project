<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;




class StdAffair extends Authenticatable
{
    use HasFactory;
    protected $table= 'affair';
    protected $fillable= ['fullName', 'username','password','phone', 'roleId',];
}
