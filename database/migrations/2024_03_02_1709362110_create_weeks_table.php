<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeeksTable extends Migration
{
    public function up()
    {
        Schema::create('weeks', function (Blueprint $table) {

		$table->string('WeekId',20);
		$table->string('Weeks',20);
		$table->string('AddedId',20);
		$table->string('UserId',20);
		$table->string('SystemId',20);
		$table->datetime('AddedDate')->default('current_timestamp');
		$table->datetime('UpdatedDate');
		$table->string('UpdatedId',60);
		$table->text('UpdatedNotes');
		$table->string('Status',10)->default('ACTIVE');
		$table->string('Archived',10)->default('NO');
		$table->string('ArchiveId',10);
		$table->datetime('ArchiveDate');
		$table->datetime('ArchiveTime');
		$table->primary('WeekId');

        });
    }

    public function down()
    {
        Schema::dropIfExists('weeks');
    }
}