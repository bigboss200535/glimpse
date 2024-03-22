<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
				$table->string('StudentId',50);
				$table->string('Firstname',100);
				$table->string('Lastname',100);
				$table->string('Fullname')->virtualAs("CONCAT(Firstname, ' ', Lastname)");
				$table->string('Gender',10);
				$table->string('NationalityId',50);
				$table->string('Address',150);
				$table->date('DOB');
				$table->string('ReligionId',50);
				$table->string('RegionId',50);
				$table->datetime('DateJoined')->useCurrent();
				// $table->string('DenominationId',20);
				// $table->string('SectionId',50);
				$table->string('Transaction',200)->nullable();
				$table->string('PreviousSchool',100)->nullable();
				$table->string('PreviousClass',100)->nullable();
				$table->string('Image',250)->nullable();
				$table->string('AddedId',50)->nullable();;
				$table->string('UserId',50);
				$table->datetime('AddedDate')->useCurrent();
				$table->datetime('UpdatedDate')->nullable();;
				$table->string('UpdatedId',60)->nullable();;
				$table->text('UpdatedNotes')->nullable();;
				$table->string('Status',10)->default('ACTIVE');
				$table->string('Archived',10)->default('NO');
				$table->string('ArchiveId',50)->nullable();;
				$table->datetime('ArchiveDate')->nullable();;
				$table->datetime('ArchiveTime')->nullable();;
				$table->primary('StudentId');
				$table->foreign('UserId')->references('UserId')->on('users');
				$table->foreign('NationalityId')->references('NationalityId')->on('nationality');
				$table->foreign('ReligionId')->references('ReligionId')->on('religion');
				$table->foreign('RegionId')->references('RegionId')->on('region');
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}