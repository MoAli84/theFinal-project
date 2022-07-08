<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affairs extends Model
{
    use HasFactory;
    protected $table='students';
    protected $fillable=['Name','Surname','StudentSsn' ,'Birthdate','GenderId','NationalityId','ReligionId',
     'GovernorateId', 'TownId','DistrictId',
     'FatherName','FatherJob','FatherSsn','FatherPhone','MotherJob','MotherName','MotherSsn','MotherPhone',
     'created_at' , 'updated_at'];


}
// ,'sublevId','termId' ,'levelId'
