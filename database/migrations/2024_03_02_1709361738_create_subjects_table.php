<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {

		$table->string('SubjectId',20);
		$table->string('SubjectName',50);
		$table->string('SubjectAbb',20);
		$table->string('Periods',15);
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
		$table->primary('SubjectId');

        });
    }

    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}