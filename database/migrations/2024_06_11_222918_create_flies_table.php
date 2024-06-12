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
            $table->string('codefly')->primary();
            $table->string('codvuelo');
            $table->string('coddestino');
            $table->string('salaabordaje');
            $table->string('horasalida');
            $table->string('horallegada');

            $table->string('codedestination');
            $table->foreign('codedestination')->references('codedestination')->on('destinations')->onDelete('cascade');


            $table->string('codeairline');
            $table->foreign('codeairline')->references('codeairline')->on('airlines')->onDelete('cascade');

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
