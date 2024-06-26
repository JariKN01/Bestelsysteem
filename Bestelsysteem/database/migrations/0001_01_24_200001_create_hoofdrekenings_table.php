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
        Schema::create('hoofdrekenings', function (Blueprint $table) {

            $table->unsignedBigInteger('economische_categories_id');

            $table->foreign('economische_categories_id')->references('id')->on('economische_categories');

            $table->id();
            $table->string('hoofd_rekening', 8);
            $table->string('beschrijving');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoofdrekenings');
    }
};
