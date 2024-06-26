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
        Schema::create('adres', function (Blueprint $table) {

            $table->unsignedBigInteger('ga_orgs_id');

            $table->foreign('ga_orgs_id')->references('id')->on('ga_orgs');

            $table->id();
            $table->string('naam');
            $table->string('adres');
            $table->string('postcode');
            $table->string('plaats');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adres');
    }
};
