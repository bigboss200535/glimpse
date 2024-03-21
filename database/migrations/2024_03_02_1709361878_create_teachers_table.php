<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
			$table->string('TeacherId',50);
			// $table->string('UserName',50);
			// $table->string('Password',100);
			// $table->string('Firstname',50);
			// $table->string('Lastname',50);
			// $table->string('Fullname',200);
			$table->string('SubjectId',20);
			$table->string('ClassId',20);
			$table->string('UserId',50);
			// $table->string('TitleId',20);
			// $table->string('Gender',10);
			// $table->string('NationalityId',20);
			// $table->string('Address',50);
			// $table->datetime('DOB');
			// $table->string('ReligionId',20);
			// $table->string('RegionId',20);
			// $table->datetime('DateJoined');
			$table->string('AddedId',50);
			$table->datetime('AddedDate')->useCurrent();
			$table->datetime('UpdatedDate');
			$table->string('UpdatedId',60);
			$table->text('UpdatedNotes');
			$table->string('Status',10)->default('ACTIVE');
			$table->string('Archived',10)->default('NO');
			$table->string('ArchiveId',50);
			$table->datetime('ArchiveDate');
			$table->datetime('ArchiveTime');
			$table->primary('TeacherId');
			$table->foreign('UserId')->references('UserId')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}