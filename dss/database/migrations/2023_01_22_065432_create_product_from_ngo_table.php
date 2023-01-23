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
        Schema::create('product_from_ngo', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->integer('ngo_name');
            $table->string('market_monitoring');
            $table->string('available_in_local_market?');
            $table->string('available_in_foreign_market?');
            $table->integer('market_price_local');
            $table->integer('market_price_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_from_ngo');
    }
};
