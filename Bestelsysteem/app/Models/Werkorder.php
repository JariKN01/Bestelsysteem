<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Werkorder extends Model
{
    use HasFactory;

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
