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
        Schema::create('passengers', function (Blueprint $table) {
            $table->id();
            $table->integer('dni');
            $table->string('names');
            $table->string('lnames');
            $table->string('email');
            $table->string('phone');

            $table->integer('codefly');
            $table->foreign('codefly')->references('codefly')->on('flies')->onDelete('cascade');

            $table->string('photo');
            $table->timestamps();
        });
        DB::table('passengers')->insert([
            'dni' => '1000000001',
            'names' => 'Sujeto de Prueba',
            'lnames' => 'Testing Migraciones',
            'email' => 'testing@migraciones',
            'phone' => '1234567890',
            'codefly' => '00001',
            'photo' => 'C:xampp\htdocs\dorado\src\image.png',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passengers');
    }
};
