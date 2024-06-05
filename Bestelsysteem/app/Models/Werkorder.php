<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Werkorder extends Model
{
    use HasFactory;

    protected $fillable = [
        'kostenplaats_id',
        'subrekenings_id',
        'order_nummer',
        'omschrijving',
        'status',
        'sub_gb_inactief',
        'cat2',
        'opmerking_status'
    ];

    public function bestelformulier()
    {
        return $this->belongsTo(Bestelformulier::class);
    }

    public function kostenplaats()
    {
        return $this->hasOne(Kostenplaats::class);
    }

    public function subrekening()
    {
        return $this->hasOne(Subrekening::class);
    }
}
