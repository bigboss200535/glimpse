<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemdataTable extends Migration
{
    public function up()
    {
        Schema::create('system_data', function (Blueprint $table) {
			$table->string('SystemId',20);
			$table->string('SystemName',50)->default('GLIMPSE');
			$table->string('Telephone',100);
			$table->string('Email',50);
			$table->string('Website',100);
			$table->binary('Image');
			$table->string('Logo',250);
			$table->string('UserId',20);
			$table->string('Slogan',100);
			$table->string('Version',50);
			$table->string('DefaultLanguage',20)->default('en');
			$table->string('AddedId',20);
			$table->datetime('AddedDate')->useCurrent();
			$table->datetime('UpdatedDate');
			$table->string('UpdatedId',20);
			$table->text('UpdatedNotes');
			$table->string('Status',10)->default('ACTIVE');
			$table->string('Archived',10)->default('NO');
			$table->string('ArchiveId',10);
			$table->datetime('ArchiveDate');
			$table->datetime('ArchiveTime');
			$table->primary('SystemId');

        });
    }

    public function down()
    {
        Schema::dropIfExists('system_data');
    }
}