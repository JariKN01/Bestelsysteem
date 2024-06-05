<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EconomischeCategorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'economische_categorie',
        'beschrijving'
    ];

    public function hoofdrekening()
    {
        return $this->hasOne(Hoofdrekening::class,'conomische_categories_id','id');
    }
}
