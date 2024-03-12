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
        Schema::create('student_guardian', function (Blueprint $table) {
                $table->string('GuardianId',20);
                $table->string('StudentId',50);
                $table->string('Firstname',50);
                $table->string('Othername',200);
                $table->string('Gender',10);
                $table->string('Contact',20);
                $table->string('UserId',20);
                $table->string('IdType',50);
                $table->string('Relationship',50);
                $table->string('Address',50);
                $table->datetime('AddedDate')->useCurrent();
                $table->datetime('UpdatedDate');
                $table->string('UpdatedId',60);
                $table->text('UpdatedNotes');
                $table->string('Status',10)->default('ACTIVE');
                $table->string('Archived',10)->default('NO');
                $table->string('ArchiveId',10);
                $table->datetime('ArchiveDate');
                $table->datetime('ArchiveTime');
                $table->primary('GuardianId');
                $table->foreign('StudentId')->references('StudentId')->on('students');
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
        Schema::dropIfExists('student_guardian');
    }
};
