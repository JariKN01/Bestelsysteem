<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adres extends Model
{
    use HasFactory;

    public function gaOrg()
    {
        return $this->belongsTo(GaOrg::class);
    }
}