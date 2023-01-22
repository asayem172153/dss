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
        Schema::create('fund_or_sponsor', function (Blueprint $table) {
            $table->id();
            $table->integer('division_id');
            $table->integer('district_id');
            $table->integer('upazila_id');
            $table->integer('fund_amount');
            $table->string('fund_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fund_or_sponsor');
    }
};
