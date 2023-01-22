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
        Schema::create('widow', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->date('enrolled_date');
            $table->string('qualification');
            $table->string('occupation');
            $table->string('skill');
            $table->integer('monthly_income');
            $table->string('income_source');
            $table->integer('job_experience');
            $table->string('type_of_wealth');
            $table->string('depended_on');
            $table->string('depends_on_her');
            $table->string('working_ability');
            $table->date('widowed');
            $table->integer('number_of_remarriage');
            $table->string('health_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('widow');
    }
};
