<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class EntryOfficer extends Authenticatable
{
    use HasFactory;
    protected $table= 'entry_officer';
    protected $fillable= ['fullName', 'username','password','phone', 'roleId',];
}
