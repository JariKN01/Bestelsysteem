<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EconomischeCategorie extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    public function hoofdrekening()
    {
        return $this->hasOne(Hoofdrekening::class,'conomische_categories_id','id');
    }
}
