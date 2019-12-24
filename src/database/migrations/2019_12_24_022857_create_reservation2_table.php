<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservation2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation2', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('room_id')->comment('部屋番号');
            $table->dateTime('start_at')->comment('開始時間');
            $table->dateTime('end_at')->comment('終了時間');
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
        Schema::dropIfExists('reservation2');
    }
}
