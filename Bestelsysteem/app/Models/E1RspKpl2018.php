<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class E1RspKpl2018 extends Model
{
    use HasFactory;

    protected $fillable = [
        'kostenplaats_id',
        'hoofdrekenings_id',
        'subrekenings_id'
    ];

    public function hoofdrekening()
    {
        return $this->hasOne(Kostenplaats::class,'kostenplaats','kostenplaats_id');
    }

    public function subrekening(){
        return $this->hasOne(Subrekening::class,'id','subrekenings_id');
    }

    public function bestelformulier()
    {
        return $this->belongsTo(Bestelformulier::class, 'id','e1_rsp_kpl2018s_id');
    }
}
