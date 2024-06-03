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

            $table->unsignedBigInteger('bestelformuliers_id');
            $table->unsignedBigInteger('ga_orgs_id');

            $table->foreign('bestelformuliers_id')->references('id')->on('bestelformuliers');
            $table->foreign('ga_orgs_id')->references('id')->on('ga_orgs');

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
