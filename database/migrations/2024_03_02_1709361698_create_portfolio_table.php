<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolioTable extends Migration
{
    public function up()
    {
        Schema::create('portfolio', function (Blueprint $table) {
			$table->string('PortfolioId',20);
			$table->string('PortfolioName',100);
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
			$table->primary('PortfolioId');
			$table->foreign('UserId')->references('UserId')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('portfolio');
    }
}