<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bestelformulier extends Model
{
    use HasFactory;

    protected $fillable = [
        'e1_rsp_kpl2018s_id',
        'fio_route_id',
        'werkorders_id',
        'adres_id',
        'bedrag',
        'bedrag_bestelbon',
        'korte_omschrijving',
        'leverdatum',
        'enterprise_one_number',
        'naam_leverancier',
        'adres_leverancier',
        'plaats_leverancier',
        'postcode_leverancier',
        'kvk_nummer',
        'omschrijving',
    ];
}
