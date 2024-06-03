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

            $table->unsignedBigInteger('kostenplaats_id');
            $table->unsignedBigInteger('hoofdrekenings_id');
            $table->unsignedBigInteger('subrekenings_id');

            $table->foreign('kostenplaats_id')->references('id')->on('kostenplaats')->onDelete('cascade');
            $table->foreign('hoofdrekenings_id')->references('id')->on('hoofdrekenings')->onDelete('cascade');
            $table->foreign('subrekenings_id')->references('id')->on('subrekenings')->onDelete('cascade');


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
