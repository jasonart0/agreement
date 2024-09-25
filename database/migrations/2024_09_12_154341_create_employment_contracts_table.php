<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class CreateEmploymentContractsTable extends Migration
{
    public function up()
    {
        Schema::create('employment_contracts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('contract_day');
            $table->unsignedInteger('contract_month');
            $table->unsignedInteger('contract_year');
            $table->string('employee_name');
            $table->unsignedInteger('commencement_day');
            $table->unsignedInteger('commencement_month');
            $table->unsignedInteger('commencement_year');
            $table->decimal('salary', 8, 2);
            $table->decimal('gross_profit_commission', 8, 2)->nullable();
            $table->integer('employee_hours');
            $table->text('vacations');
            $table->string('employee_address');
            $table->string('sin_number');
            $table->string('drivers_license');
            // $table->binary('signature_step1');
            // $table->binary('signature_step2');
            // $table->binary('signature_step3');
            // $table->binary('signature_step4');
            // $table->binary('signature_step5');
            // $table->binary('signature_step6');
            // $table->binary('signature_step7');
            // $table->binary('signature_step8');
            // $table->binary('signature_step9');
            // $table->binary('signature_step10');
            $table->timestamps();
        });

        // // Adding fields for signatures
        DB::statement("ALTER TABLE employment_contracts ADD signature_step1 MEDIUMBLOB NOT NULL");
        DB::statement("ALTER TABLE employment_contracts ADD signature_step2 MEDIUMBLOB NOT NULL");
        DB::statement("ALTER TABLE employment_contracts ADD signature_step3 MEDIUMBLOB NOT NULL");
        DB::statement("ALTER TABLE employment_contracts ADD signature_step4 MEDIUMBLOB NOT NULL");
        DB::statement("ALTER TABLE employment_contracts ADD signature_step5 MEDIUMBLOB NOT NULL");
        DB::statement("ALTER TABLE employment_contracts ADD signature_step6 MEDIUMBLOB NOT NULL");
        DB::statement("ALTER TABLE employment_contracts ADD signature_step7 MEDIUMBLOB NOT NULL");
        DB::statement("ALTER TABLE employment_contracts ADD signature_step8 MEDIUMBLOB NOT NULL");
        DB::statement("ALTER TABLE employment_contracts ADD signature_step9 MEDIUMBLOB NOT NULL");
        DB::statement("ALTER TABLE employment_contracts ADD signature_step10 MEDIUMBLOB NOT NULL");
    }

    public function down()
    {
        Schema::dropIfExists('employment_contracts');
    }
}
