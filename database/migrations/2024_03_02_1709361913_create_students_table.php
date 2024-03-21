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
				$table->date('DateJoined');
				// $table->string('DenominationId',20);
				$table->string('SectionId',50);
				$table->string('Transaction',200);
				$table->string('PreviousSchool',100)->default('N/A');
				$table->string('PreviousClass',100)->default('N/A');
				$table->string('Image',250);
				$table->string('AddedId',20);
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