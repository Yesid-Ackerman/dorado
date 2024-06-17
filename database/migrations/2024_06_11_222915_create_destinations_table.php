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
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->string('desc');
            $table->timestamps();
        });

        DB::table('destinations')->insert([
            ['desc' => 'Armenia'],
            ['desc' => 'Barranquilla'],
            ['desc' => 'Cali'],
            ['desc' => 'Cartagena'],
            ['desc' => 'Medellin'],
            ['desc' => 'Santa Marta'],
            ['desc' => 'San Andres Isla'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinations');
    }
};
