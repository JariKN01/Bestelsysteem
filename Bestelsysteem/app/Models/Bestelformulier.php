<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bestelformulier extends Model
{
    use HasFactory;

    protected $fillable = [
        'e1_rsp_kpl2018s_id',
        'fio_routes_id',
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
        'kvk_nummer'
    ];

    public function adres()
    {
        return $this->belongsTo(adres::class);
    }

    public function werkorder(){
        return $this->hasOne(Werkorder::class);
    }

    public function fioRoute(){
        return $this->hasOne(FioRoute::class,'id','fio_routes_id');
    }

    public function logBoek()
    {
        return $this->hasMany(Logboek::class);
    }

    public function rspkpl(){
        return $this->hasOne(E1RspKpl2018::class,'id','e1_rsp_kpl2018s_id');
    }

    public function afdeling(){
        return $this->hasOneThrough(Afdeling::class, GaOrg::class, 'id', 'afdeling_id');
    }
}
