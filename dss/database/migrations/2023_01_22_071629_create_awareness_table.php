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
        Schema::create('awareness', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('awareness_type');
            $table->integer('perticipated');
            $table->string('address');
            $table->integer('upazila_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('awareness');
    }
};
