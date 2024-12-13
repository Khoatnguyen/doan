<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_hotel', function (Blueprint $table) {
            $table->id();
            $table->integer('hotel_id');
            $table->string('name_custom');
            $table->string('phone_custom');
            $table->string('email_custom');
            $table->integer('price_hotel');
            $table->integer('price_hotel');
            $table->integer('price_hotel');
            $table->integer('price_hotel');
            $table->integer('price_hotel');
            $table->integer('price');
            $table->integer('status');
            $table->date('date_start');
            $table->date('date_end');
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
        Schema::dropIfExists('order_hotel');
    }
}
