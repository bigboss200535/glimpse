<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassTable extends Migration
{
    public function up()
    {
        Schema::create('class', function (Blueprint $table) {
			$table->string('ClassId',50);
			$table->string('ClassName',20);
			$table->string('NumberOfSubjects',20);
			$table->string('ClassAbbreviation',20);
			$table->string('UserId',100);
			$table->datetime('AddedDate')->useCurrent();
			$table->datetime('UpdatedDate');
			$table->string('UpdatedId',60);
			$table->text('UpdatedNotes');
			$table->string('Status',20)->default('ACTIVE');
			$table->string('Archived',20)->default('NO');
			$table->string('ArchiveId',20);
			$table->datetime('ArchiveDate');
			$table->datetime('ArchiveTime');
			$table->primary('ClassId');
			$table->foreign('UserId')->references('UserId')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('class');
    }
}