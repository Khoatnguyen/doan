<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_info', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('full_name');
            $table->tinyInteger('gender');
            $table->string('avatar');
            $table->string('phone');
            $table->string('address');
            $table->bigInteger('province_id');
            $table->bigInteger('district_id');
            $table->bigInteger('ward_id');
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
        Schema::dropIfExists('user_info');
    }
}
