<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
			$table->string('UserId',50);
			$table->string('Username',50);
			$table->string('Password',100);
			$table->string('TitleId',50);
			$table->string('Firstname',50);
			$table->string('Lastname',50);
			$table->string('Fullname',200)->virtualAs("CONCAT(Title, '. ', Lastname, ' ', Firstname)");
			$table->date('DOB');
			$table->text('Address');
			$table->string('Telephone',20);
			$table->string('Gender',20);
			$table->string('Email',50);
			$table->string('Mode',50)->default('NEW USER');
			$table->string('Role',100);
			$table->string('Permission',100);
			$table->string('Image',150);
			// $table->string('Country',20);
			// $table->string('Religion',20);
			$table->string('AddedId',50);
			$table->datetime('AddedDate')->useCurrent();
			$table->datetime('UpdatedDate');
			$table->string('UpdatedId',50);
			$table->text('UpdatedNotes');
			$table->string('Status',20)->default('ACTIVE');
			$table->string('Archived',20)->default('NO');
			$table->string('ArchiveId',50);
			$table->date('ArchiveDate');
			$table->date('ArchiveTime');
			$table->primary('UserId');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}