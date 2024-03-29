<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionTable extends Migration
{
    public function up()
    {
        Schema::create('region', function (Blueprint $table) {
			$table->string('RegionId',50);
			$table->string('Region',150);
			$table->string('AddedId',50);
			$table->string('UserId',50);
			$table->datetime('AddedDate')->useCurrent();
			$table->datetime('UpdatedDate');
			$table->string('UpdatedId',60);
			$table->text('UpdatedNotes');
			$table->string('Status',10)->default('ACTIVE');
			$table->string('Archived',10)->default('NO');
			$table->string('ArchiveId',50);
			$table->datetime('ArchiveDate');
			$table->datetime('ArchiveTime');
			$table->primary('RegionId');
			$table->foreign('UserId')->references('UserId')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('region');
    }
}