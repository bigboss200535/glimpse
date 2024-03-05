<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNationalityTable extends Migration
{
    public function up()
    {
        Schema::create('nationality', function (Blueprint $table) {

		$table->string('NationalityId',20);
		$table->string('Nationality',50);
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
		$table->primary('NationalityId');

        });
    }

    public function down()
    {
        Schema::dropIfExists('nationality');
    }
}