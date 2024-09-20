<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWitnessAndFitnessFieldsToEmploymentContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employment_contracts', function (Blueprint $table) {
            $table->integer('widtness_day')->unsigned()->nullable()->comment('Witness Day of Signing');
            $table->integer('widtness_month')->unsigned()->nullable()->comment('Witness Month of Signing');
            $table->integer('widtness_year')->unsigned()->nullable()->comment('Witness Year of Signing');
            $table->string('fitness_field_one', 255)->nullable()->comment('Fitness-related Field One');
            $table->string('witness_name_1', 255)->nullable()->comment('Name of Witness 1');
            $table->string('witness_person', 255)->nullable()->comment('Witness Person');
            $table->string('witness_person_name', 255)->nullable()->comment('Witness Person Name');
            $table->string('witness_field2', 255)->nullable()->comment('Witness Field 2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employment_contracts', function (Blueprint $table) {
            $table->dropColumn([
                'widtness_day',
                'widtness_month',
                'widtness_year',
                'fitness_field_one',
                'witness_name_1',
                'witness_person',
                'witness_person_name',
                'witness_field2'
            ]);
        });
    }
}
