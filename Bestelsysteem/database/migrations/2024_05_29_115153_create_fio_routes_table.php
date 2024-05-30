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
        Schema::create('fio_routes', function (Blueprint $table) {
            $table->id();
            $table->string('routing_code');
            $table->string('beschrijving');
            $table->string('bedrijf');
            $table->int('actief');
            $table->string('naam');
            $table->string('CatCd1');
            $table->boolean('actief');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fio_routes');
    }
};
