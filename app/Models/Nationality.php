<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
     use HasFactory;
   
     protected $table = 'nationality';
     protected $primaryKey = 'NationalityId ';
     public $timestamps = false;

      public function user(){
       return $this->belongsTo('App\Models\Users', 'UserId');
     }
    
     protected $fillable = [
        'NationalityId',
        'Nationality',
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
