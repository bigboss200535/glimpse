<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionTable extends Migration
{
    public function up()
    {
        Schema::create('region', function (Blueprint $table) {

		$table->string('RegionId',20);
		$table->string('Region',20);
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
		$table->primary('RegionId');

        });
    }

    public function down()
    {
        Schema::dropIfExists('region');
    }
}