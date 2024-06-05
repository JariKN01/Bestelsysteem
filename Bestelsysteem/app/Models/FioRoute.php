<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FioRoute extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    public function gaorg()
    {
        return $this->hasOne(GaOrg::class,'langNr','GOARG_langNr');
    }

    public function bestelformulier()
    {
        return $this->belongsTo(Bestelformulier::class, 'fio_routes_id','id');
    }
}
