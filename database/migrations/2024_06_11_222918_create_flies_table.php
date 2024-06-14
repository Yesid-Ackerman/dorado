<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flies', function (Blueprint $table) {
            $table->integer('codefly')->primary();
            $table->string('salaabordaje')->nullable();
            $table->string('horasalida');
            $table->string('horallegada');

            $table->foreignId('destination_id')->references('id')->on('destinations')->onDelete('cascade');

            $table->foreignId('airline_id')->references('id')->on('airlines')->onDelete('cascade');

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
