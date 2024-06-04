<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bestelformulier extends Model
{
    use HasFactory;

    protected $fillable = [
        'afdeling_naam',
        'budgethouder_naam',
        'kostenplaats_type',
        'kostenplaats_naam',
        'categorie_naam',
        'kostensoort',
        'kostencode',
        
        'bedrag',
        'bedrag_bestelbon',
        'korte_omschrijving',
        'leverdatum',
        'enterprise_one_number',
        'naam_leverancier',
        'adres_leverancier',
        'plaats_leverancier',
        'postcode_leverancier',
        'kvk_nummer'
    ];

    public function adres()
    {
        return $this->belongsTo(adres::class);
    }

    public function afdeling(){
        return $this->hasOneThrough(Afdeling::class, GaOrg::class, 'id', 'afdeling_id');
    }
}
