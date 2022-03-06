<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShirtMeasureMentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shirt_measure_ments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->string('chest')->nullable();
            $table->string('waist')->nullable();
            $table->string('bottom')->nullable();
            $table->string('length')->nullable();
            $table->string('sholder')->nullable();
            $table->string('front_width')->nullable();
            $table->string('biceps')->nullable();
            $table->string('sleev_length')->nullable();
            $table->string('arm_hole')->nullable();
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
        Schema::dropIfExists('shirt_measure_ments');
    }
}
