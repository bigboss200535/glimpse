<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

		$table->string('UserId',20);
		$table->string('Username',50);
		$table->string('Password',250);
		$table->string('Firstname',50);
		$table->string('Lastname',50);
		$table->string('Fullname',200);
		$table->string('Address',50);
		$table->string('Telephone1',20);
		$table->string('Telephone2',20);
		$table->string('Gender',20);
		$table->string('Email',50);
		$table->string('Mode',50)->default('NEW-USER');
		$table->string('Role',150);
		$table->string('Image',250);
		$table->string('Country',20);
		$table->string('Religion',20);
		$table->string('AddedId',20);
		$table->date('DOB');
		$table->string('Title',20);
		$table->datetime('AddedDate')->default('current_timestamp');
		$table->datetime('UpdatedDate');
		$table->string('UpdatedId',60);
		$table->text('UpdatedNotes');
		$table->string('Status',10)->default('ACTIVE');
		$table->string('Archived',10)->default('NO');
		$table->string('ArchiveId',10);
		$table->datetime('ArchiveDate');
		$table->datetime('ArchiveTime');
		$table->primary('UserId');

        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}