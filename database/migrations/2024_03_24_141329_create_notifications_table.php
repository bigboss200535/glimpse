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
        Schema::create('notifications', function (Blueprint $table) {
            $table->string('NotificationId',50);
            $table->string('Notification')->nullable();
            $table->datetime('DateSent')->useCurrent();
            $table->datetime('DateRead')->nullable();
            $table->string('ReadStatus',50)->nullable();
            $table->string('UserId',50)->nullable();
            $table->string('ReceiverId',50)->nullable();
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
        Schema::dropIfExists('notifications');
    }
};
