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
        DB::table('flies')->insert([
            'codefly' => 1,
            'salaabordaje' => 'PR0001',
            'horasalida' => '2024-06-17 08:00:00',
            'horallegada' => '2024-06-17 12:00:00',
            'destination_id' => 1,
            'airline_id' => 1,
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flies');
    }
};
