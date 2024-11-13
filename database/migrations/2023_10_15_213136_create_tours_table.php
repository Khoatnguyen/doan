<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class  CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->text('small_description');
            $table->integer('time');
            $table->tinyInteger('type_tour');
            $table->integer('number_person');
            $table->string('address');
            $table->string('vehicle');
            $table->string('depart');
            $table->string('schedule');
            $table->string('library_images');
            $table->longText('include_price');
            $table->longText('none_include_price');
            $table->longText('note');
            $table->longText('schedule_price');
            $table->bigInteger('price');
            $table->dateTime('date_start');
            $table->dateTime('date_end');
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
        Schema::dropIfExists('tours');
    }
}
