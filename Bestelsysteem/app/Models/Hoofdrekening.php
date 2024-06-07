<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hoofdrekening extends Model
{
    use HasFactory;

    public $fillable = [
        'economische_categories_id',
        'hoofd_rekening',
        'beschrijving'
    ];

    public function economischeCategorie()
    {
        return $this->belongsTo(EconomischeCategorie::class,'economische_categories_id','id');
    }

    public function rspkpl()
    {
        return $this->belongsTo(E1RspKpl2018::class,'id','hoofdrekenings_id');
    }
}
