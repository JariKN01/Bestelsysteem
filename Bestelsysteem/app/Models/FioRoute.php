<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FioRoute extends Model
{
    use HasFactory;

    protected $fillable = ['routing_code', 'beschrijving', 'bedrijf', 'naam', 'CatCd1', 'actief'];

}
