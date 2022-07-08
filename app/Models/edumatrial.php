<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/* use App\Models\stu; */

class edumatrial extends Model
{
    use HasFactory;
    protected $table='edumaterial';

    /* public function edudataa()
    {
        return $this->belongsto(stu::class, 'StudentSsn');
    } */
}
