<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('driverName');
            $table->string('contact');
            $table->string('national_id');
            $table->string('license_no');
            $table->string('license_exp');
            $table->string('address');
            $table->string('truck_name');
            $table->string('chasis_no');
            $table->string('description');
            $table->integer('fee');
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('driver');
    }
}


    // Schema::create('drivers', function (Blueprint $table) {
    //     $table->id();
    //     $table->string('driverName');
    //     $table->integer('driverContact');
    //     $table->string('driverAddress');
    //     $table->string('vehicleName');
    //     $table->integer('vehicleNumber');
    //     $table->string('photo');
    //     $table->timestamps();
    // });