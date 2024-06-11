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
        Schema::create('ga_orgs', function (Blueprint $table) {
            $table->id();
            $table->string('langNr')->unique(); // Create 'langNr' column and make it unique
            $table->unsignedBigInteger('afdelings_id')->nullable();
            $table->string('naam');
            $table->string('departement');
            $table->string('titel')->default('default value')->nullable();
            $table->string('bedrijf')->default('default value')->nullable();
            $table->timestamps();

            $table->foreign('afdelings_id')->references('id')->on('afdelings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ga_orgs');
    }
};
