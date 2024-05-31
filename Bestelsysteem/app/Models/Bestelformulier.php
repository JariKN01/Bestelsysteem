<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bestelformulier extends Model
{
    use HasFactory;

    protected $fillable = [
        'afdeling_budgethouder',
        'budgethouder',
        'betrekking',
        'kostenplaats',
        'kostensoort_categorie',
        'kostensoort',
        'kostencode',
        'fio_route',
        'bedrag',
        'bedrag_vermelden',
        'omschrijving',
        'leverdatum',
        'contract',
        'enterprise_one_exists',
        'enterprise_one_number',
        'naam_leverancier',
        'adres',
        'postcode_woonplaats',
        'kvk_nummer'
    ];
}
