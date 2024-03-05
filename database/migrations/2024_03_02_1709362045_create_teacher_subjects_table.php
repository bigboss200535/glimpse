<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherSubjectsTable extends Migration
{
    public function up()
    {
        Schema::create('teacher_subjects', function (Blueprint $table) {

		$table->string('TeacherSubjectId',20);
		$table->string('TeacherId',20);
		$table->string('SubjectId',20);
		$table->string('ClassSubjectId',30);
		$table->string('ClassId',20);
		$table->string('AddedId',20);
		$table->string('UserId',20);
		$table->datetime('AddedDate')->default('current_timestamp');
		$table->datetime('UpdatedDate');
		$table->string('UpdatedId',60);
		$table->text('UpdatedNotes');
		$table->string('Status',10)->default('ACTIVE');
		$table->string('Archived',10)->default('NO');
		$table->string('ArchiveId',10);
		$table->datetime('ArchiveDate');
		$table->datetime('ArchiveTime');
		$table->primary('TeacherSubjectId');

        });
    }

    public function down()
    {
        Schema::dropIfExists('teacher_subjects');
    }
}