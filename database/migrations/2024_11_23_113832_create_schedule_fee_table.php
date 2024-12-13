<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleFeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule_fee', function (Blueprint $table) {
            $table->id();
            $table->integer('tour_id');
            $table->string('airfare_fee');
            $table->string('trans_fee');
            $table->string('meal_fee');
            $table->string('guide_fee');
            $table->string('hotel_fee');
            $table->string('other_fee');
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
        Schema::dropIfExists('schedule_fee');
    }
}
