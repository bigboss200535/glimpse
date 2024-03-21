<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
     use HasFactory;
   
     protected $table = 'class';
     protected $primaryKey = 'ClassId';
     public $timestamps = false;

     // public function user(){
     //   return $this->belongsTo('App\Models\Users', 'UserId');
     // }

     protected $fillable = [
        'ClassId',
        'ClassName',
        'NumberOfSubjects',
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
