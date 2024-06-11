<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flies', function (Blueprint $table) {
            $table->id();
            $table->string('codvuelo');
            $table->string('coddestino');
            $table->string('salaabordaje');
            $table->string('horasalida');
            $table->string('horallegada');

            //referencia fly
            $table->foreignId('passenger_id')->references('id')->on('passengers');

            //referencia destination
            $table->foreignId('destination_id')->references('id')->on('destinations');

            //referencia airline
            $table->foreignId('airline_id')->references('id')->on('airlines');



            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flies');
    }
};
