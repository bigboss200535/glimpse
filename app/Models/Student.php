<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
     use HasFactory;
   
     protected $table = 'students';
     protected $primaryKey = 'StudentId';
     public $timestamps = false;

     public function user(){
       return $this->belongsTo('App\Models\Users', 'UserId');
     }

     // public function user(){
     //   return $this->belongsTo('App\Models\Users', 'UserId');
     // }

     protected $fillable = [
        'StudentId',
        'Firstname',
        'Lastname',
        'Gender',
        'NationalityId',
        'Address',
        'DOB',
        'ReligionId',
        'RegionId',
        'DateJoined',
        'DenominationId',
        'Transaction',
        'SectionId',
        'PrevSchool',
        'Image',
        'AddedId',
        'UserId',
        'AddedDate',
        'UpdatedDate',
        'UpdatedId',
        'UpdatedNotes',
        'Status',
        'Archived',
        'ArchiveId',
        'ArchiveDate',
        'ArchiveTime',
      ];
}
