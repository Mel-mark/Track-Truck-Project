<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('pickUpDate');            
            $table->bigInteger('driver_id')->unsigned();
            $table->foreign('driver_id')->references('id')->on('drivers')->onDelete('cascade');
            $table->string('pickUpLocation');
            $table->string('reason');
            $table->string('is_paid')->default('0');
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
        Schema::dropIfExists('booking');
    }
}

    // $table->user_id();
    // $table->driver_id();
    // $table->integer('user_id');
    // $table->integer('driver_id');
    // $table->string('truckname');
    // $table->string('trucknum');
    // $table->boolean('is_paid')->default('0');