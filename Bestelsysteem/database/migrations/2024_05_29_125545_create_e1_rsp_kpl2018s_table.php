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
        Schema::create('e1_rsp_kpl2018s', function (Blueprint $table) {

            $table->unsignedInteger('kostenplaats_id');
            $table->unsignedInteger('hoofdrekenings_id');
            $table->unsignedInteger('subrekenings_id');

            $table->foreign('kostenplaats_id')->references('id')->on('kostenplaats');
            $table->foreign('hoofdrekenings_id')->references('id')->on('hoofdrekenings');
            $table->foreign('subrekenings_id')->references('nummer')->on('subrekenings');


            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('e1_rsp_kpl2018s');
    }
};
