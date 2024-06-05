<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KostenplaatsType extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'omschrijving',
        'opmerking'
    ];
    public function kostenplaats(){
        return $this->belongsTo(Kostenplaats::class,'kostenplaats_type_id','id');
    }
}
