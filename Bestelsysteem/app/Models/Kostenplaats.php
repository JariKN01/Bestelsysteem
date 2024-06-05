<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kostenplaats extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    public function kostenplaatsType()
    {
        return $this->hasOne(KostenplaatsType::class,'id','kostenplaats_type_id');
    }

    public function gaorg()
    {
        return $this->hasOne(GaOrg::class,'langNr','GOARG_langNr');
    }

    public function e1Rspkl2018(){
        return $this->belongsTo(E1Rspkl2018::class);
    }

    public function workorder()
    {
        return $this->belongsTo(Werkorder::class);
    }
}
