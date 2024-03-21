<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNationalityTable extends Migration
{
    public function up()
    {
        Schema::create('nationality', function (Blueprint $table) {
			$table->string('NationalityId',50);
			$table->string('Nationality',100);
			$table->string('AddedId',100);
			$table->string('UserId',20);
			$table->datetime('AddedDate')->useCurrent();
			$table->datetime('UpdatedDate');
			$table->string('UpdatedId',100);
			$table->text('UpdatedNotes');
			$table->string('Status',10)->default('ACTIVE');
			$table->string('Archived',10)->default('NO');
			$table->string('ArchiveId',50);
			$table->datetime('ArchiveDate');
			$table->datetime('ArchiveTime');
			$table->primary('NationalityId');
			$table->foreign('UserId')->references('UserId')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('nationality');
    }
}