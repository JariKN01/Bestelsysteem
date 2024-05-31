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
            $table->string('afdeling_budgethouder');
            $table->string('budgethouder');
            $table->string('betrekking');
            $table->string('kostenplaats');
            $table->string('kostensoort_categorie');
            $table->string('kostensoort');
            $table->string('kostencode');
            $table->string('fio_route');
            $table->double('bedrag');
            $table->boolean('bedrag_vermelden');
            $table->string('omschrijving');
            $table->date('leverdatum');
            $table->string('contract');
            $table->boolean('enterprise_one_exists');
            $table->string('enterprise_one_number');
            $table->string('naam_leverancier');
            $table->string('adres');
            $table->string('postcode_woonplaats');
            $table->string('kvk_nummer');
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
