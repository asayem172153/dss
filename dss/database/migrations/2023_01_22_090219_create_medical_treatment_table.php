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
        Schema::create('medical_treatment', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_the_treatment');
            $table->integer('medical_expences');
            $table->string('is_it_expensive');
            $table->string('medical_support_type');
            $table->integer('treatment_duration');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medical_treatment');
    }
};
