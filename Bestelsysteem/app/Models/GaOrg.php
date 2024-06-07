<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class GaOrg extends Model
{
    use HasFactory;

    protected $fillable = [
        'langNr',
        'afdelings_id',
        'naam',
        'departement',
        'titel',
        'bedrijf',
        'afdelings_id'
    ];

    public function adres()
    {
        return $this->belongsTo(Adres::class,'langNr','GOARG_langNr');
    }
    public function afdeling(){
        return $this->belongsTo(Afdeling::class);
    }

    public function user(){
        return $this->hasOne(User::class,'GOARG_langNr','langNr');
    }

    public function bestelformulier(){
        return $this->belongsTo(Bestelformulier::class);
    }
    public function fioRoute(){
        return $this->belongsTo(FioRoute::class,'GOARG_langNr','langNr');
    }

    public function logboek(){
        return $this->belongsTo(Logboek::class,'langNr','GOARG_langNr');
    }

    public function kostenPlaast()
    {
        return $this->belongsTo(Kostenplaats::class,'GOARG_langNr','langNr');
    }
}
