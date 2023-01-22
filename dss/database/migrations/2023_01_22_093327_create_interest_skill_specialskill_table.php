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
        Schema::create('interest_skill_specialskill', function (Blueprint $table) {
            $table->id();
            $table->string('skill_name');
            $table->integer('min_time_needs_to_achive_this_skill');
            $table->string('is_training_available');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interest_skill_specialskill');
    }
};
