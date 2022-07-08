<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Manager extends Model
{
    use HasFactory;
    protected $table= 'manager';
    protected $fillable= ['fullName', 'username','password','phone', 'roleId',];
}
