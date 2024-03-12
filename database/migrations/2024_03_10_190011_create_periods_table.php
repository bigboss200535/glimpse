<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periods', function (Blueprint $table) {
            $table->string('PeriodId',20);
            $table->string('Period',50);
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
            $table->primary('PeriodId');
            $table->foreign('UserId')->references('UserId')->on('users');
        
            // $table->id();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('periods');
    }
};
