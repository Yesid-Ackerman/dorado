<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('airlines', function (Blueprint $table) {
            $table->id();
            $table->string('desc',50);
            $table->timestamps();
        });
        DB::table('airlines')->insert([
            ['desc' => 'AVIANCA'],
            ['desc' => 'SATENA'],
            ['desc' => 'WINGO'],
            ['desc' => 'LATAM'],
            ['desc' => 'ULTRA AIR'],
            ['desc' => 'EASYFLY'],
        ]);
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airlines');
    }
};
