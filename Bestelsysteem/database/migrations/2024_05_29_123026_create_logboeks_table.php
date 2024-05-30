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
        Schema::create('logboeks', function (Blueprint $table) {
            $table->id();
            $table->enum('beschrijving', ['aangemaakt', 'bewerkt', 'verzonden', 'goedgekeurd', 'afgekeurd', 'adresnummerGoedgekeurd', 'inOnderzoek', 'afgerond', 'onafgerond']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logboeks');
    }
};
