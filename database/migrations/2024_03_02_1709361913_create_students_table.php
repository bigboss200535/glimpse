<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
				$table->string('StudentId',20);
				$table->string('Firstname',50);
				$table->string('Lastname',50);
				$table->string('Fullname')->virtualAs("CONCAT(Firstname, ' ', Lastname)");
				// $table->string('Fullname')->generatedAs("CONCAT(Firstname, ' ', Lastname)"); 
				$table->string('Gender',10);
				// $table->string('ClassId',20);
				// $table->string('PreviousClass',20);
				$table->string('NationalityId',20);
				$table->string('Address',150);
				$table->date('DOB');
				$table->string('PortfolioId',20);
				$table->string('ReligionId',20);
				$table->string('RegionId',20);
				$table->date('DateJoined');
				// $table->date('CompleteYear');
				$table->string('DenominationId',20);
				$table->string('SectionId',20);
				$table->string('Transaction',200);
				// $table->string('ParentName',50);
				// $table->string('ParentContact',20);
				// $table->string('ParentAddress',50);
				$table->string('Image',250);
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
				$table->primary('StudentId');
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}