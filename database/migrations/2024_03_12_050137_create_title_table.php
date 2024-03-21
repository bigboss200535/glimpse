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
        Schema::create('title', function (Blueprint $table) {
            $table->string('TitleId',50);
            $table->string('Title',50);
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
            $table->primary('TitleId');
            $table->foreign('UserId')->references('UserId')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('title');
    }
};
