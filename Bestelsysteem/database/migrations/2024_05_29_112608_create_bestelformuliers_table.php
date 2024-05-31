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
        Schema::create('bestelformuliers', function (Blueprint $table) {
            $table->id();

            // Adding foreign key columns
            $table->unsignedBigInteger('e1_rsp_kpl2018s_id');
            $table->unsignedBigInteger('fio_routes_id');
            $table->unsignedBigInteger('werkorders_id');
            $table->unsignedBigInteger('adres_id');


            // Adding foreign key constraints
            $table->foreign('e1_rsp_kpl2018s_id')->references('id')->on('e1_rsp_kpl2018s');
            $table->foreign('fio_routes_id')->references('id')->on('fio_routes');
            $table->foreign('werkorders_id')->references('id')->on('werkorders');
            $table->foreign('adres_id')->references('id')->on('adres');

            $table->double('bedrag');
            $table->boolean('bedrag_bestelbon');
            $table->string('korte_omschrijving');
            $table->date('leverdatum');
            $table->string('enterprise_one_number');
            $table->string('naam_leverancier');
            $table->string('adres_leverancier');
            $table->string('plaats_leverancier');
            $table->string('postcode_leverancier');
            $table->string('kvk_nummer');
            $table->string('omschrijving');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bestelformuliers');
    }
};
