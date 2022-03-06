<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePantMeasureMentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pant_measure_ments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->string('waist')->nullable();
            $table->string('hips')->nullable();
            $table->string('thigh')->nullable();
            $table->string('rise')->nullable();
            $table->string('leg_openning')->nullable();
            $table->string('out_seam')->nullable();
            $table->string('inseam')->nullable();
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
        Schema::dropIfExists('pant_measure_ments');
    }
}
