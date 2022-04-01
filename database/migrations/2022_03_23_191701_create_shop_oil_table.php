<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopOilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_oil', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('cube');
            $table->integer('price');
            $table->string('capacity');
            $table->string('trk');
            $table->string('valve');
            $table->string('system');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_oil');
    }
}
