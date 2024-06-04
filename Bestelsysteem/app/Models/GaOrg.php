<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaOrg extends Model
{
    use HasFactory;

    public function afdeling(){
        return $this->belongsTo(Afdeling::class);
    }
}
