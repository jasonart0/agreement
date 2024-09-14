<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploymentContractsTable extends Migration
{
    public function up()
    {
        Schema::create('employment_contracts', function (Blueprint $table) {
            $table->id();
            $table->string('employer_name');
            $table->string('employer_address');
            $table->string('employee_name');
            $table->string('job_title');
            $table->text('job_duties');
            $table->decimal('salary', 10, 2);
            $table->decimal('commission', 10, 2);
            $table->integer('vacation_days');
            $table->boolean('confidentiality_clause')->default(0); // Set default to 0
            $table->text('signature_step1');
            $table->text('signature_step2');
            $table->text('signature_step3');
            $table->text('signature_step4');
            $table->text('signature_step5');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employment_contracts');
    }
}
