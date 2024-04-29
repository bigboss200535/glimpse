<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
     use HasApiTokens, HasFactory, Notifiable;
   
     protected $table = 'users';
     // protected $primaryKey = 'UserId';
     public $timestamps = false;

     protected $fillable = [
        'UserId',
        'Username',
        'Password',
        'Title',
        'Firstname',
        'Lastname',
        'Gender',
        'Birthdate',
        'Address',
        'Telephone',
        'Email',
        'Mode',
        'Role',
        'Permission',
        'Image',
        'Transaction',
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
