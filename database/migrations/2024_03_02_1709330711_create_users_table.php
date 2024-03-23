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
			$table->string('Title',50);
			$table->string('Firstname',50);
			$table->string('Lastname',50);
			$table->string('Fullname',200)->virtualAs("CONCAT(Lastname, ' ', Firstname)");
			$table->date('DOB');
			$table->text('Address')->nullable();
			$table->string('Telephone',20);
			$table->string('VerifyTelephone',100)->nullable();
			$table->string('Gender',20);
			$table->string('Email',50)->nullable();
			$table->string('VerifyEmail',10)->nullable();
			$table->string('Mode',50)->default('NEW USER');
			$table->string('Role',100)->nullable();
			$table->string('Permission',100)->nullable();
			$table->string('Image',150)->nullable();
			$table->string('AddedId',50)->nullable();
			$table->datetime('AddedDate')->useCurrent();
			$table->datetime('UpdatedDate')->nullable();
			$table->string('UpdatedId',50)->nullable();
			$table->text('UpdatedNotes')->nullable();
			$table->string('Status',20)->default('ACTIVE');
			$table->string('Archived',20)->default('NO');
			$table->string('ArchiveId',50)->nullable();
			$table->date('ArchiveDate')->nullable();
			$table->date('ArchiveTime')->nullable();
			$table->primary('UserId');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}