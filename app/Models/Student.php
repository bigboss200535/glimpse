<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
   
     protected $table = 'student';
     protected $primaryKey = 'StudentId';
     public $timestamps = false;

     protected $fillable = [
        'StudentId',
        'Firstname',
        'Lastname',
        'Gender',
        // 'ClassId',
        // 'PreviousClass',
        'NationalityId',
        'Address',
        'DOB',
        // 'PortfolioId',
        'ReligionId',
        'RegionId',
        'DateJoined',
        // 'CompleteYear',
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
