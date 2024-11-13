<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderToursInforTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_tours_info', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->unsigned();
            $table->integer('tour_id');
            $table->string('reservation_name');
            $table->date('reservation_date');
            $table->string('reservation_phone');
            $table->string('reservation_email');
            $table->dateTime('date_start');
            $table->bigInteger('debt');
            $table->integer('status');
            $table->integer('payment_status');
            $table->bigInteger('payment');
            $table->integer('number_person');
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
        Schema::dropIfExists('order_tours_info');
    }
}
