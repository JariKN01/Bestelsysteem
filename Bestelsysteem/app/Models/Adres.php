<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adres extends Model
{
    use HasFactory;

    protected $fillable = [
        'ga_orgs_id',
        'naam',
        'adres',
        'postcode',
        'plaats'
    ];
    public function gaOrg()
    {
        return $this->belongsTo(GaOrg::class);
    }
}
