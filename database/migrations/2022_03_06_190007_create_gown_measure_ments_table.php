<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGownMeasureMentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gown_measure_ments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->string('length')->nullable();
            $table->string('upper_chest')->nullable();
            $table->string('chest')->nullable();
            $table->string('waist')->nullable();
            $table->string('stomach')->nullable();
            $table->string('hips')->nullable();
            $table->string('sholder')->nullable();
            $table->string('front_nech_depts')->nullable();
            $table->string('sleeve_length')->nullable();
            $table->string('sleeve_round')->nullable();
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
        Schema::dropIfExists('gown_measure_ments');
    }
}
