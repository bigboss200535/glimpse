<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    public function up()
    {
        Schema::create('weeklyexams', function (Blueprint $table) {

		$table->string('WeeklyId',20);
		$table->string('TeacherId',20);
		$table->string('SubjectId',20);
		$table->string('ClassId',20);
		$table->string('Term',20);
		$table->string('AcademicYear',20);
		$table->string('ExamsType',200);
		$table->string('StudentId',20);
		$table->string('SectionA',20);
		$table->string('SectionB',20);
		$table->integer('TotalMarks',);
		$table->integer('GradeMark',);
		$table->string('Position',20);
		$table->string('AddedId',20);
		$table->string('UserId',20);
		$table->datetime('AddedDate')->useCurrent();
		$table->datetime('UpdatedDate');
		$table->string('UpdatedId',60);
		$table->text('UpdatedNotes');
		$table->string('Status',10)->default('ACTIVE');
		$table->string('Archived',10)->default('NO');
		$table->string('ArchiveId',10);
		$table->datetime('ArchiveDate');
		$table->datetime('ArchiveTime');
		$table->primary('WeeklyId');

        });
    }

    public function down()
    {
        Schema::dropIfExists('weeklyexams');
    }
}