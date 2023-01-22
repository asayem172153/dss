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
        Schema::create('person_with_disability_pwd', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->string('gender');
            $table->string('disability_type');
            $table->date('enrolled_date');
            $table->string('educational_qualification');
            $table->string('occupation');
            $table->string('interest/skill/special_skill');
            $table->string('sports');
            $table->integer('monthly_income');
            $table->string('income_source');
            $table->integer('job_experience');
            $table->string('type_of_wealth');
            $table->string('depended_on');
            $table->string('depends_on_him/her');
            $table->string('working_ability');
            $table->string('marital_status');
            $table->string('health_status');
            $table->string('medical_treatment');
            $table->string('is_family_support_for_treatment?');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_with_disability_pwd');
    }
};
