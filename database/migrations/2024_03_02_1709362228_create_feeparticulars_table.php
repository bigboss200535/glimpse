<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeeparticularsTable extends Migration
{
    public function up()
    {
        Schema::create('feeparticulars', function (Blueprint $table) {

		$table->string('FeeParticularsId',20);
		$table->string('FeeParticularsfor',20);
		$table->string('FeePartForClass',20);
		$table->string('Item1',100);
		$table->string('Item2',100);
		$table->string('Item3',100);
		$table->string('Item4',100);
		$table->string('Item5',100);
		$table->string('Item6',100);
		$table->string('Item7',100);
		$table->string('Item8',100);
		$table->string('Item9',100);
		$table->string('Item10',100);
		$table->string('amt1',20);
		$table->string('amt2',20);
		$table->string('amt3',20);
		$table->string('amt4',20);
		$table->string('amt5',20);
		$table->string('amt6',20);
		$table->string('amt7',20);
		$table->string('amt8',20);
		$table->string('amt9',20);
		$table->string('amt10',20);
		$table->string('AddedId',20);
		$table->datetime('AddedDate')->default('current_timestamp');
		$table->datetime('UpdatedDate');
		$table->string('UpdatedId',60);
		$table->text('UpdatedNotes');
		$table->string('Status',10)->default('ACTIVE');
		$table->string('UserId',20);
		$table->string('Archived',10)->default('NO');
		$table->string('ArchiveId',10);
		$table->datetime('ArchiveDate');
		$table->datetime('ArchiveTime');
		$table->primary('FeeParticularsId');

        });
    }

    public function down()
    {
        Schema::dropIfExists('feeparticulars');
    }
}