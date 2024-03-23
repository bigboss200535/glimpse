<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLogs extends Model
{
     use HasFactory;
   
     // protected $table = 'students';
     // protected $primaryKey = 'StudentId';
     public $timestamps = false;


     // public function user(){
     //   return $this->belongsTo('App\Models\Users', 'UserId');
     // }

     protected $fillable = [
        'UserId',
        'Logname',
        'Logtime',
        'Server'
        'ServerIp'
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
