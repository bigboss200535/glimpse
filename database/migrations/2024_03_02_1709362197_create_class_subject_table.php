<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassSubjectTable extends Migration
{
    public function up()
    {
        Schema::create('class_subject', function (Blueprint $table) {

		$table->string('ClassSubjectId',20);
		$table->string('ClassSubjectCode',20);
		$table->string('SubjectId',20);
		$table->string('ClassId',20);
		$table->string('AddedId',20);
		$table->string('SystemId',20);
		$table->datetime('AddedDate')->default('current_timestamp');
		$table->datetime('UpdatedDate');
		$table->string('UpdatedId',60);
		$table->text('UpdatedNotes');
		$table->string('Status',10)->default('ACTIVE');
		$table->string('UserId',20);
		$table->string('Archived',10)->default('NO');
		$table->string('ArchiveId',10);
		$table->datetime('ArchiveDate');
		$table->datetime('ArchiveTime');
		$table->primary('ClassSubjectId');

        });
    }

    public function down()
    {
        Schema::dropIfExists('class_subject');
    }
}