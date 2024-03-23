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
        Schema::create('userlogs', function (Blueprint $table) {
            $table->string('UserId',50);
            $table->string('Logname',50);
            $table->datetime('Logtime')->useCurrent();
            $table->string('Server',50)->nullable();
            $table->string('ServerIp',50)->nullable();
            $table->string('AddedId',50)->nullable();
            $table->datetime('AddedDate')->useCurrent();
            $table->datetime('UpdatedDate')->nullable();
            $table->string('UpdatedId',50)->nullable();
            $table->text('UpdatedNotes')->nullable();
            $table->string('Status',20)->default('ACTIVE');
            $table->string('Archived',20)->default('NO');
            $table->string('ArchiveId',50)->nullable();
            $table->date('ArchiveDate')->nullable();
            $table->date('ArchiveTime')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userlogs');
    }
};
