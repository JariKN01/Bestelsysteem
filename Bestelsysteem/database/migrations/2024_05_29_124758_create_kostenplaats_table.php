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
        Schema::create('kostenplaats', function (Blueprint $table) {

            $table->unsignedInteger('kostenplaats_type_id');
            $table->unsignedInteger('ga_orgs_id');

            $table->foreign('kostenplaats_type_id')->references('id')->on('kostenplaats_types');
            $table->foreign('ga_orgs_id')->references('id')->on('ga_orgs');

            $table->id();
            $table->string('beschrijving');
            $table->string('bkcd');
            $table->string('gerelateerd');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kostenplaats');
    }
};
