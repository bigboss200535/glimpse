<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionTable extends Migration
{
    public function up()
    {
        Schema::create('section', function (Blueprint $table) {
			$table->string('SectionId',20);
			$table->string('SectionName',20);
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
			$table->primary('SectionId');
			$table->foreign('UserId')->references('UserId')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('section');
    }
}