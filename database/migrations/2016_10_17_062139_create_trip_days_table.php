<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip_days', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('origin_id');
            $table->unsignedBigInteger('destination_id');
            $table->unsignedInteger('num_days');
            $table->unsignedBigInteger('last_synced_at');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trip_days');
    }
}
