<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logboek extends Model
{
    use HasFactory;

    public function bestelformulier()
    {
        return $this->belongsTo(Bestelformulier::class);
    }

    public function gaorg()
    {
        return $this->hasOne(GaOrg::class,'langNr','GAORG_langNr');
    }
}
